<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	
	public function showLoginForm(){
		/*
		$user = User::find(1);
		$user->password = bcrypt('teste');
		$user->save();
		*/	
		
		if(Auth::check() === true) // logado?
			return view('admin.index');
		return view('admin.login');			
	}
	
	
	
	public function logar(Request $request){
	
		$credentials = [
			'email' => $request->email,
			'password' => $request->password
		];

		if(Auth::attempt($credentials))
			return redirect()->route('home');	
		
		return view('admin.login');	
	}	

	public function logout(){
		Auth::logout();
		return view('admin.login');
	}	
}
