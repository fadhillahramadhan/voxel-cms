<?php

namespace App\Http\Controllers\VO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\SysMember;
use App\Models\SysMemberAccount;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class Login extends Controller
{
    public function show_login()
    {
        return Inertia::render('VO/Login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'member_account_username' => 'required',
            'member_account_password' => 'required',
        ]);

        if ($validator->fails()) {
            return Inertia::render('VO/Login', [
                'errors' => $validator->errors(),
            ]);
        }

        $member = SysMemberAccount::where('member_account_username', $request->member_account_username)
            ->with('member')
            ->first();

        if (!$member) {
            return Inertia::render('VO/Login', [
                'errors' => [
                    'member_account_username' => ['Invalid username or password']
                ],
            ]);
        }



        // check password with  passowrd_verify password default hash
        if (!password_verify($request->member_account_password, $member->member_account_password)) {
            return Inertia::render('VO/Login', [
                'errors' => [
                    'member_account_password' => ['Invalid password']
                ],
            ]);
        }

        // $request->session()->put('member', $member);

        // if request remember session only 1 day else 1 hour
        if ($request->remember) {
            $request->session()->put('member', $member);
        } else {
            Cookie::queue('member', $member, 60);
            $request->session()->put('member', $member);
        }

        return redirect('/vo/dashboard/show');
    }
}
