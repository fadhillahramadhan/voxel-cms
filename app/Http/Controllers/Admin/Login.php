<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    public function show_login()
    {
        return Inertia::render('Admin/Login');
    }

    public function login(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'administrator_username' => 'required|exists:site_administrator,administrator_username',
                'administrator_password' => 'required',
            ], [
                'administrator_username.required' => "Silahkan masukkan username Anda.",
                'administrator_username.exists' => 'Username tidak ditemukan.',
                'administrator_password.required' => 'Silahkan masukkan password Anda.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Silahkan periksa kembali inputan Anda.',
                    'error' => 'validation',
                    'data' => $validator->errors()
                ], 400);
            }

            $administrator_username = $request->input('administrator_username');
            $administrator_password = $request->input('administrator_password');

            // Database query for checking the administrator credentials
            $user = DB::table('site_administrator')
                ->where('administrator_username', $administrator_username)
                ->first();


            // check if password basic
            if (!$user) {
                throw new \Exception("Username atau password salah");
            }

            // compare password_default
            if (!password_verify($administrator_password, $user->administrator_password)) {
                throw new \Exception("Username atau password salah");
            }

            // Store the administrator data in session
            $request->session()->put('admin', $user);



            // return redirect('/admin/dashboard/show');
            return response()->json([
                'message' => 'Login berhasil',
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
