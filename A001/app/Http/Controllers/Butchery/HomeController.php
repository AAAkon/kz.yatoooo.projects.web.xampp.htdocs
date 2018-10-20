<?php

namespace App\Http\Controllers\Butchery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function index(){
    	return view('visitor.butchery.home');
    }
}
