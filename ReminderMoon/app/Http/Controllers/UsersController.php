<?php

namespace App\Http\Controllers;

use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function index(){
    	$user = Auth::user();
        return view('admin.users.index', compact('user') );
    }

    public function create(){

    	return view('admin.users.create');    
    }
    public function store(Request $request){
		User:: create($request->all());
    	return "succes";
    	return $request->all();
    }
public function update(Request $request)
{
    $user = Auth::User();
    $request_data = $request->All();
    $error = false;
    if( $request->opassword != '' && $request->opassword != null ){      
        if($request->npassword != '' && $request->npassword != null){
          if(Hash::check($request_data['opassword'], $user->password ))
          { 
              $user->password = $request_data['npassword'];
          }else{
            $error = true;
          } 
        }else{
            $error = true;
        }             
    }
    if(!$error){

        $user->name  =  $request_data['name']; 
        $user->email =  $request_data['email'] . '@gmail.com';
        $user->save();
        return view('admin.users.index', compact('user') );
    }else{
         return view('error.password'); 
    }
         


}
}
