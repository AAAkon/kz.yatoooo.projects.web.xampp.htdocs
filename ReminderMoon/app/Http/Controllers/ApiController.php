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
    	// return response()->json(json_encode($reklama));
    	return $reklama;
    }

    public function getDataFromAnotherProject($title){

    	$reklama = json_decode(file_get_contents('http://127.0.0.1:8000/api/reklama/'.$title), true);
    	return view('pages.api', [ 'reklama'=>$reklama ]);
    }
}
