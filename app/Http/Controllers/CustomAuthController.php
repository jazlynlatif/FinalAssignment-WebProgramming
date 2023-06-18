<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function login() {
        return view("auth.login");
    }
    public function signup() {
        return view("auth.signup");
    }
    public function signupAdmin(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:5|max:15'
        ]);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->password = Hash::make($request->password);
        $res = $admin->save();
        if ($res) {
            return back()->with('success', 'You have registered succesfully');
        } else {
            return back()->with('fail', 'This name is not registered');
        }
    }
    public function loginAdmin(Request $request)
{
    $request->validate([
        'name' => 'required',
        'password' => 'required|min:5|max:15'
    ]);

    $admin = Admin::where('name', '=', $request->name)->first();

    if ($admin) {
        // Admin is found, check the password
        if (Hash::check($request->password, $admin->password)) {
            $request->session()->put('loginId', $admin->id);
            return redirect('dashboard');
        } else {
            return back()->with('fail', 'Invalid password');
        }
    } else {
        return back()->with('fail', 'This name is not registered');
    }
}

     public function dashboard() {

        return view ('dashboard');
    }
    public function logout() {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/');
        }
    }
}
