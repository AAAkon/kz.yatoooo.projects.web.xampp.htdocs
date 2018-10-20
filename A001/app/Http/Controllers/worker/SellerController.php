<?php

namespace App\Http\Controllers\worker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    
	public function profile(){
		return view('worker.seller.profile');
	}
}
