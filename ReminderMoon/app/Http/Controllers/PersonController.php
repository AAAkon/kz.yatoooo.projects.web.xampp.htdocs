<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use App\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class PersonController extends Controller
{

    public function index(){
        $users =  User::all();
        return view('admin.users.index', compact('users') );
    }

    public function create(){
        return view('admin.users.create');    
    }
    public function store(Request $request){
       //dd($request->all());
       $person = new Person();
       $person->user_id = Auth::id();
       $person->nation = $request->nation;
       $person->full_name = $request->full_name;
       $person->gender = $request->gender;
       $person->working_place = $request->working_place;
       $person->occupation = $request->occupation;
       $person->birthday = $request->birthday;
       $person->add_information = $request->add_information;
       $person->priority = $request->priority;
       if( $request->attach == Null){
         $person->attach = 0;
       }else{
         $person->attach = $request->attach;
       }
       $person->created = date("Y-m-d H:i:s");
       $filename = $request->image->getClientOriginalName();
       $request->image->storeAs('public/upload', $filename);
       $person->image = $filename;
       $person->save();
       return redirect('/home');
    }
}
