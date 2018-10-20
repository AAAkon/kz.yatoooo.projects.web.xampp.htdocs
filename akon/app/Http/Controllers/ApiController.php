<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reklama;
use Auth;

class ApiController extends Controller
{
    //

    public function getData($title){

    	$reklama = Reklama::where('title','=',$title)->first();
    	// return response()->json($reklama->title);
    	return $reklama;
    }

    public function getDataFromAnotherProject($title){

    	$reklama = json_decode(file_get_contents('http://127.0.0.1:8001/api/reklama/'.$title), true);
    	return view('user.api', [ 'reklama'=>$reklama ]);
    }
}
