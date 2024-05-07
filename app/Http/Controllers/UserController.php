<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function register() {
        return view('product.register');
    }

    /**
     * Register for users
     */
    public function doRegister(Request $request) {
        $data = $request->all();
        $data["user_type"] = 1;

        try {
            DB::beginTransaction();

            $user = new User();
            $user->add($data);

            $data['user_id'] = $user->user_id;

            $student = new Student();
            $student->add($data);

            DB::commit();
            return redirect('login')->with('register', 'Register successfully');
        } catch (\Exception $e) {
            DB::rollback();
            \Log::error("[ERROR] error registering user " . $data['name']. ": " . $e->getMessage());
            return back()->with('failed', 'Register failed')->withInput($data);
        }
    }

    public function login() {
        return view('product.login');
    }

    public function doLogin(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $student = Student::where('user_id', auth()->user()->user_id)->first();
            dd($student);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
