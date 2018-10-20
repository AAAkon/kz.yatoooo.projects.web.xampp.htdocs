<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use App\Code;
use Illuminate\Support\Facades\Auth;
class CodeController extends Controller
{

    public function index(){
        $users =  User::all();
        return view('admin.users.index', compact('users') );
    }

    public function create(){
        return view('admin.users.create');    
    }
    public function store(){
      // dd(request()->all());
       $code = new Code();
       $code->name = request("name");
       $code->user_id = Auth::id();
       $code->language = request("language");
       $code->code = request("code");
       $code->priority = request("priority");
       if(request("attach") == Null){
         $code->attach = 0;
       }else{
         $code->attach = request("attach"); 
       }
       $code->created = date("Y-m-d H:i:s");
       $code->save();
       return redirect('/home');
    }
}
