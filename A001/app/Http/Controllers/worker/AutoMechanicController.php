<?php

namespace App\Http\Controllers\worker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutoMechanicController extends Controller
{
    
	public function profile(){

		return view('worker.auto-mechanic.profile');
	}
}
