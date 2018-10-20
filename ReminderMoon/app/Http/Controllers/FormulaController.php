<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use App\Formula;
use Illuminate\Support\Facades\Auth;
class FormulaController extends Controller
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
       $formula = new Formula();
       $formula->name = request("name");
       $formula->user_id = Auth::id();
       $formula->formula = request("formula");
       $formula->priority = request("priority");
       if( request("attach") == Null){
         $formula->attach = 0;
       }else{
         $formula->attach = request("attach");
       }
       $formula->created = date("Y-m-d H:i:s");
       $formula->save();
       return redirect('/home');
    }
}
