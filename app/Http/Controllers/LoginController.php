<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct (){
		$this->middleware('guest')->except('logout');
	}

	public function index (){
		return view('auth.login');
	}

	public function login (){
		if(auth()->attempt(request(['username', 'password'])))
			return redirect('/dashboard');

		return back()->withErrors([
			"message" => "Incorrect credentials"
			]);
	}

	public function logout (){
		auth()->logout();
		return redirect('/');
	}
}
