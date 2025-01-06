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

    // ALL PAGE
    public function show()
    {
        return Inertia::render('Public/ModelingAll');
    }

    public function create()
    {
        return Inertia::render('Public/ModelingCreate');
    }

    public function myModel()
    {
        return Inertia::render('Public/MyModel');
    }

    public function detail($unique_code)
    {
        $model = DB::table('custom_models')->where('unique_code', $unique_code)->first();

        return Inertia::render('Public/ModelingDetail', [
            'unique_code' => $unique_code,
            'model' => $model,
            'engine_url' => env('APP_ENGINE_URL') . '?code=' . $unique_code,
        ]);
    }

    // API / SERVICE
    public function showAllModel($my_model = '')
    {
        try {
            $request = request();


            $table = 'custom_models';

            $select =  [
                'custom_models.name' => 'name',
                'custom_models.type' => 'type',
                'custom_models.image' => 'image',
                'custom_models.unique_code' => 'unique_code',
                'custom_models.created_at' => 'created_at',
                'custom_models.updated_at' => 'updated_at',
                'custom_models.description' => 'description',
                'users.name' => 'author_name',
            ];


            $where = "is_published = 1 AND is_saved = 1";

            if ($my_model) {
                $where = "is_saved = 1 AND custom_models.user_id = " . $request->session()->get('user')->id;
            }

            $join = "JOIN users ON custom_models.user_id = users.id";

            $group = "";

            $data = $this->tableLib->getListTable($request, $select, $table, $join, $where, $group);

            foreach ($data->results as $key => $value) {
            }


            return response()->json([
                'message' => 'Data Member',
                'error' => '',
                'data' => [
                    'results' => $data->results,
                ],
                'pagination' => $data->pagination
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
                'error' => 'error',
                'data' => []
            ], 400);
        }
    }


    public function saveCustomModel(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'type' => 'required',
                'is_published' => 'required',
            ], [
                'name.required' => "Please enter your name.",
                'type.required' => 'Please enter your type.',
                'is_published.required' => 'Please enter your whether it is published or not.',
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
            $is_published = $request->input('is_published');
            $description = $request->input('description');

            $unique_code = md5($name . $type . now());

            // type to lowercase
            $type = strtolower($type);



            DB::table('custom_models')->insert([
                'user_id' => $request->session()->get('user')->id,
                'name' => $name,
                'type' => $type,
                'description' => $description ?? '',
                'image' => '',
                'unique_code' => $unique_code,
                'is_published' => $is_published,
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
                    'engine_url' => env('APP_ENGINE_URL') . '?code=' . $unique_code . '&action=edit',
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
                'image' => 'required',
            ], [
                'unique_code.required' => "Please enter your unique code.",
                'json.required' => 'Please enter your json data.',
                'image.required' => 'Please enter your image.',
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

            // check if unique_code exists
            $custom_model = DB::table('custom_models')->where('unique_code', $unique_code)->first();

            if (!$custom_model) {
                throw new \Exception('Custom model not found.');
            }

            // update image it would be base 64 anyway
            DB::table('custom_models')
                ->where('unique_code', $unique_code)
                ->update([
                    'image' => $request->input('image'),
                    'updated_at' => now(),
                    'is_saved' => 1,
                ]);

            // Ensure the directory exists
            $directory = public_path('custom_models');
            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }

            // Encode the JSON data to a string
            $json_data = json_encode($json, JSON_PRETTY_PRINT);

            // Check if json_encode was successful
            if ($json_data === false) {
                throw new \Exception('Failed to encode JSON data.');
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
            print_r($th->getMessage());
            die;
            return response()->json([
                'message' => $th->getMessage(),
                'error' => 'error',
                'data' => []
            ], 400);
        }
    }
}
