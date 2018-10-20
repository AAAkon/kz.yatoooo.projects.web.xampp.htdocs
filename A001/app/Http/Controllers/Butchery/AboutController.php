<?php

namespace App\Http\Controllers\Butchery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //

    public function index(){
    	return view('visitor.butchery.about');
    }
}
