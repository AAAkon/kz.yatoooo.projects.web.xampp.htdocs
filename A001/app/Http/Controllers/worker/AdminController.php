<?php

namespace App\Http\Controllers\worker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    
	public function profile(){
		$user = Auth::user();
		return view('worker.admin.profile', $user);	
	}

	//
	public function users(){
		$users = User::where('profession','!=','admin')->get();
		return view('worker.admin.users', ['users'=>$users]);
	}

	public function userRegister(){
		return view('worker.admin.userRegister');
	}
}
