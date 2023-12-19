<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;

use App\Models\User;

class c_Auth extends Controller
{
    public function signin()
    {
        return view('client.auth.signin');
    }

    public function signup()
    {
        return view('client.auth.signup');
    }

    public function profile()
    {
        if (Session::has('loginId'))
        {
            $user = User::findOrFail(Session::get('loginId'));
            return view('client.auth.profile', compact('user'));
        }

        return redirect(route('signin'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if (!$user) {
            return back()->with('login_fail', 'This email is not registered.');
        }
        if (!Hash::check($request->password, $user->password)) {
            return back()->with('login_fail', 'Incorrect password.');
        }
        else {
            $request->session()->put('loginId', $user->id);
            return redirect(route('index'));
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|unique:users|alpha_num|phone_number|max:10',
            'password' => 'required|confirmed|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/|min:8|max:16'     // At least 1 normal char, 1 uppercase char, 1 number
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);

        $result = $user->save();

        if ($result) {
            return redirect(route('signin'))->with('registration_success', 'You have registered successfully!');
        }
        else {
            return back()->with('registration_fail', 'Something went wrong!');
        }
    }

    public function logout(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        
        if (Session::has('loginId')) {
            if ($request->id == Session::get('loginId'))
            {
                Session::pull('loginId');
                return redirect(route('signin'))->with('logout_success', 'You have logged out successfully!');
            }
        }
    }
    
}
