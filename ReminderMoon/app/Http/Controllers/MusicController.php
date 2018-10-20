<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
class MusicController extends Controller
{
    //
    public function store(Request $request){
       //dd($request->all());

       $music = new Music();
       $music->user_id = Auth::id();  
	   $music->song = $request->song; 
       $music->artist = $request->artist;
       $music->album = $request->album;
       
       $music->text = $request->text;
       $music->priority = $request->priority;
       if( $request->attach == Null){
 		 $music->attach = 0;
       }else{
       	 $music->attach = $request->attach;
       }
      
       $music->created = date("Y-m-d H:i:s");
       $music->save();
       return redirect('/home');
    }
}
