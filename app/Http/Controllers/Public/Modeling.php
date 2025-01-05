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
            $engine_url =  env('APP_ENGINE_URL') . '?code=' . $unique_code . '&pull_url=' . 'https://voxelize.b-cdn.net/' . $unique_code . '.json';

            print_r($engine_url);
            die;

            return response()->json([
                'message' => 'Custom model saved successfully',
                'error' => '',
                'data' => [
                    'engine_url' => $engine_url,
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
                'json.required' => 'Please enter your JSON data.',
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

            // Encode the JSON data to a string
            $json_data = json_encode($json, JSON_PRETTY_PRINT);

            if ($json_data === false) {
                return response()->json([
                    'message' => 'Failed to encode JSON data.',
                    'error' => 'error',
                    'data' => []
                ], 400);
            }

            $baseUrl = 'https://storage.bunnycdn.com/voxels'; // BunnyCDN Base URL
            $accessKey = '01f388be-b5ae-41a0-86875184e1d9-bf2a-415d';
            $filePath = $unique_code . '.json'; // File path on BunnyCDN

            // DELETE the existing file
            $deleteCurl = curl_init();
            curl_setopt_array($deleteCurl, [
                CURLOPT_URL => $baseUrl . '/' . $filePath,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'DELETE',
                CURLOPT_HTTPHEADER => [
                    'AccessKey: ' . $accessKey,
                ],
            ]);
            $deleteResponse = curl_exec($deleteCurl);
            $deleteHttpCode = curl_getinfo($deleteCurl, CURLINFO_HTTP_CODE);
            curl_close($deleteCurl);

            // CREATE the new file using octet-stream


            $createCurl = curl_init();
            curl_setopt_array($createCurl, [
                CURLOPT_URL => $baseUrl . '/' . $filePath,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'PUT',
                CURLOPT_POSTFIELDS => $json_data,  // The raw JSON data
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/octet-stream',  // Set content-type to octet-stream
                    'Accept: application/json',
                    'AccessKey: ' . $accessKey,
                ],
            ]);
            $createResponse = curl_exec($createCurl);
            $createHttpCode = curl_getinfo($createCurl, CURLINFO_HTTP_CODE);
            curl_close($createCurl);

            if ($createHttpCode >= 200 && $createHttpCode < 300) {
                return response()->json([
                    'message' => 'Custom model updated successfully',
                    'error' => '',
                    'data' => []
                ], 200);
            }

            return response()->json([
                'message' => 'Failed to upload JSON to BunnyCDN.',
                'error' => 'error',
                'url' => $baseUrl . '/' . $filePath,
                'data' => json_decode($createResponse, true),
            ], 400);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
                'error' => 'error',
                'data' => []
            ], 400);
        }
    }
}
