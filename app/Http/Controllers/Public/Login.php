<?php

namespace App\Http\Controllers\Public;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{

    public function show()
    {
        return Inertia::render('Public/Login');
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ], [
                'email.required' => 'Please enter your email.',
                'email.email' => 'Please enter a valid email.',
                'password.required' => 'Please enter your password.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Please check your input again.',
                    'error' => 'validation',
                    'data' => $validator->errors()
                ], 400);
            }

            $email = $request->input('email');
            $password = $request->input('password');

            // Database query for checking the user credentials
            $user = DB::table('users')
                ->where('email', $email)
                ->first();

            if (!$user) {
                throw new \Exception("Email not found.");
            }

            if (!password_verify($password, $user->password)) {
                throw new \Exception("Password is incorrect.");
            }

            // Store the user data in the database

            DB::table('users')
                ->where('email', $email)
                ->update([
                    'updated_at' => now()
                ]);


            // remove password from user object
            unset($user->password);
            // store session
            $request->session()->put('user', $user);

            return response()->json([
                'message' => 'Login successful',
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
    // logout
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('home');
    }
}
