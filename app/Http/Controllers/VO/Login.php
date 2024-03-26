<?php

namespace App\Http\Controllers\VO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\SysMember;
use Illuminate\Support\Facades\Validator;

class Login extends Controller
{
    public function show_login()
    {
        return Inertia::render('VO/Login');
    }

    public function login(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'member_account_username' => 'required',
                'member_account_password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors());
            }

            $member_account_username = $request->input('member_account_username');
            $member_account_password = $request->input('member_account_password');

            // $member = SysMember::where('member_account_username', $member_account_username)
            //     ->where('member_account_password', $member_account_password)
            //     ->first();

            // if ($member) {
            $request->session()->put('member', [
                'member_account_username' => 'admin',
                'member_account_password' => 'admin',
            ]);

            // /vo/dashboard
            return redirect('/vo/dashboard/show');
            // } else {
            //     return redirect()->back()->withErrors(['member_account_username' => 'Username atau password salah']);
            // }
        } catch (\Throwable $th) {
            print_r($th->getMessage());
            die();
            return redirect()->back()->withErrors(['member_account_username' => 'Username atau password salah']);
        }
    }
}
