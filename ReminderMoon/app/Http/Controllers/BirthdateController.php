<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Birthday;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
class BirthdateController extends Controller
{

    public function store(Request $request){
       //dd($request->all());
       $birthday = new Birthday();
       $birthday->user_id = Auth::id();
       $birthday->name = $request->name;
       $birthday->birthdate = $request->birthdate;
       if( $request->attach == Null){
 		 $birthday->attach = 0;
       }else{
       	 $birthday->attach = $request->attach;
       }
       $birthday->created = date("Y-m-d H:i:s");
       $birthday->save();
       return redirect('/home');
    }
}
