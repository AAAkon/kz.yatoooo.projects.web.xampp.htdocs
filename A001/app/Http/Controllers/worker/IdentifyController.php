<?php

namespace App\Http\Controllers\worker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IdentifyController extends Controller
{
    //
	public function identify(){
		switch (Auth::user()->profession) {
            case 'admin':
                return redirect()->route('worker-admin-profile');
                break;
            case 'auto-mechanic':
                return redirect()->route('worker-auto-mechanic-profile');
                break;
            case 'cook':
                return redirect()->route('worker-cook-profile');
                break;
            case 'seller':
                return redirect()->route('worker-seller-profile');
                break;
            default:
                return redirect()->route('home');
                break;
        }
	}
}
