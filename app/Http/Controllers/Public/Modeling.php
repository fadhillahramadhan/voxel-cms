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



            DB::table('custom_models')->insert([
                'user_id' => $request->session()->get('user')->id,
                'name' => $name,
                'type' => $type,
                'image' => null,
                'unique_code' => $unique_code,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Ensure the directory exists
            $directory = public_path('custom_models');
            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }

            // create json file
            $json_file = fopen($directory . '/' . $unique_code . '.json', 'w');

            return response()->json([
                'message' => 'Custom model saved successfully',
                'error' => '',
                'data' => [
                    'engine_url' => env('APP_ENGINE_URL') . '?code=' . $unique_code . '&ref=' . env('APP_URL'),
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

    // update json custom model only need unique_code and json data
    public function updateCustomModel(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'unique_code' => 'required',
                'json' => 'required',
            ], [
                'unique_code.required' => "Please enter your unique code.",
                'json.required' => 'Please enter your json data.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Please check your input again.',
                    'error' => 'validation',
                    'data' => $validator->errors()
                ], 400);
            }

            $unique_code = $request->input('unique_code');
            $json = $request->input('json');

            // Ensure the directory exists
            $directory = public_path('custom_models');
            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }

            // Encode the JSON data to a string
            $json_data = json_encode($json, JSON_PRETTY_PRINT);

            // Check if json_encode was successful
            if ($json_data === false) {
                return response()->json([
                    'message' => 'Failed to encode JSON data.',
                    'error' => 'error',
                    'data' => []
                ], 400);
            }

            // create json file
            $json_file = fopen($directory . '/' . $unique_code . '.json', 'w');
            fwrite($json_file, $json_data);
            fclose($json_file);

            return response()->json([
                'message' => 'Custom model updated successfully',
                'error' => '',
                'data' => []
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
                'error' => 'error',
                'data' => []
            ], 400);
        }
    }

    // get json
    public function getCustomModel(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'unique_code' => 'required',
            ], [
                'unique_code.required' => "Please enter your unique code.",
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Please check your input again.',
                    'error' => 'validation',
                    'data' => $validator->errors()
                ], 400);
            }

            $unique_code = $request->input('unique_code');

            // Ensure the directory exists
            $directory = public_path('custom_models');
            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }

            // Check if the file exists
            if (!file_exists($directory . '/' . $unique_code . '.json')) {
                return response()->json([
                    'message' => 'File not found.',
                    'error' => 'error',
                    'data' => []
                ], 400);
            }

            // Read the file
            $json_file = fopen($directory . '/' . $unique_code . '.json', 'r');
            $json_data = fread($json_file, filesize($directory . '/' . $unique_code . '.json'));
            fclose($json_file);

            // Decode the JSON data
            $json = json_decode($json_data, true);

            // Check if json_decode was successful
            if ($json === null) {
                return response()->json([
                    'message' => 'Failed to decode JSON data.',
                    'error' => 'error',
                    'data' => []
                ], 400);
            }

            return response()->json([
                'message' => 'Custom model retrieved successfully',
                'error' => '',
                'data' => $json
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
