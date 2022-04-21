<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Input;
// use App\Http\Controllers\Redirect;
use Redirect;


class LoginController extends Controller
{
    //
    public function view()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|password'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->with([
            'loginError' => 'Email atau password salah',
        ]);
    }
    public function postLogin(Request $request)
    {

        $email = $request->post('email');
        // dd($request);
        $password = $request->post('password');
        // $validator = Validator::make(
        //     $username,
        //     $password,
        //     array(
        //         'email' => 'rewquired|email|unique:Users',
        //         'password' => 'required|min:6'
        //     )
        // );
        // dd($username);

        $validator = Validator::make($request->all(), [
            'password' => 'required|string',
            'email' => 'required|string|email',
        ]);



        if ($validator->fails()) {
            return redirect()->route('login')->withErrors($validator)->withInput();
        }

        return view('home');
    }
    public function hello_world()
    {
        return "Hello World";
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
