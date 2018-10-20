<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;
class PagesController extends Controller
{
    public function index(){
    	if(View::exists('pages.index')){
            if(Auth::guest())
            {
                return view('pages.index');
            }else{
                return view('home');
            }
			
    	}else{
    		return "No view available";
    	}	
    }
    public function profile(){
    	return view('pages.profile');
    }

    public function setting(){
    	return view('pages.setting');
    }

    public function blade(){
    	$gender = 'male';
    	$text = 'Hello there !';
    	return view('blade.bladetest', compact('gender', 'text'));
    }
}
