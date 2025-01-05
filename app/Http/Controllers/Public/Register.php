<?php

namespace App\Http\Controllers\Public;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;


use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class Register extends Controller
{

    public function show()
    {
        return Inertia::render('Public/Register');
    }

    // Only Example to do job
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
            ], [
                'name.required' => "Please enter your name.",
                'email.required' => 'Please enter your email.',
                'email.email' => 'Please enter a valid email.',
                'email.unique' => 'Email already exists.',
                'password.required' => 'Please enter your password.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Please check your input again.',
                    'error' => 'validation',
                    'data' => $validator->errors()
                ], 400);
            }

            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');

            // Database query for checking the user credentials
            $user = DB::table('users')
                ->where('email', $email)
                ->first();

            if ($user) {
                throw new \Exception("Email already exists.");
            }


            $user = DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'image' => 'https://api.multiavatar.com' . '/' . $email . '.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);



            return response()->json([
                'message' => 'Registration successful',
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
}
