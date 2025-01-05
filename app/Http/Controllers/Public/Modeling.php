<?php

namespace App\Http\Controllers\Public;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;


use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class Modeling extends Controller
{

    public function show()
    {
        return Inertia::render('Public/Modeling');
    }

    public function saveCustomModel(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'type' => 'required',
            ], [
                'name.required' => "Please enter your name.",
                'type.required' => 'Please enter your type.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Please check your input again.',
                    'error' => 'validation',
                    'data' => $validator->errors()
                ], 400);
            }

            $name = $request->input('name');
            $type = $request->input('type');

            $unique_code = md5($name . $type . now());

            // type to lowercase
            $type = strtolower($type);

            $custom_model = DB::table('custom_models')->insert([
                'user_id' => $request->session()->get('user')->id,
                'name' => $name,
                'type' => $type,
                'image' => null,
                'unique_code' => $unique_code,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return response()->json([
                'message' => 'Custom model saved successfully',
                'error' => '',
                'data' => [
                    'unique_code' => $unique_code,
                    'engine_url' => env('APP_ENGINE_URL') . '/' . $unique_code
                ]
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
                'error' => 'error',
                'data' => []
            ], 400);
        }
    }
}
