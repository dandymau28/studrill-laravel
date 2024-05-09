<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function doLogin(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'deleted_at' => function($query) {
                $query->whereNull('deleted_at');
            }
        ])) {
            if (auth()->user()->user_type_id != 2) {
                return back()->withErrors([
                    'failed' => 'You are not Admin',
                ])->onlyInput('username');
            }

            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'failed' => 'Username and password combinations are mismatch',
        ])->onlyInput('username');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }
}
