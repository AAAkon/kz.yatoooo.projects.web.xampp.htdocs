<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use App\Task;
use Illuminate\Support\Facades\Auth;
class NotesController extends Controller
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
       $note = new Task();
       $note->name = request("name");
       $note->user_id = Auth::id();
       $note->description = request("description");
       $note->priority = request("priority");
       if( request("attach") == Null){
         $note->attach = 0;
       }else{
         $note->attach = request("attach");
       }
       $note->created = date("Y-m-d H:i:s");
       $note->save();
       return redirect('/home');
    }
}
