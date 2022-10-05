<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
// use Illuminate\Support\Facades\Hash;
use Session;
// use Auth;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')
            ->withSuccess('You have successfully logged in');
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');

    }
    public function register(){
        return view('auth.register');
    }
    public function postRegister(Request $request){
        $request->validate(['email' => 'required', 'password' => 'required']);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
    public function dashboard(){
        $cek = Auth::user();
        if($cek){
            return view('user.dashboard');
        }
        return redirect('login')->withSuccess('You are not allowed to access');
    }
    public function create(array $data){
        Return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
