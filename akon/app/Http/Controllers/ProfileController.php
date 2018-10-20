<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;


class ProfileController extends Controller
{
    

    public function profile($username)
    {
    	$user = User::whereUsername($username)->first();
    	$country = DB::table('countries')->select('name')->where('id', $user->country_id)->first();
    	$region = DB::table('regions')->select('name')->where('id', $user->region_id)->first();
    	$city = DB::table('cities')->select('name')->where('id', $user->city_id)->first();
    	$uhqs = DB::table('user_human_qualities')->where('user_id',$user->id)->get();
    	$hqls = DB::table('human_qualities_list')->get();
    	
    	return view('user.profile', ['user'=>$user, 'country'=>$country, 'region'=>$region, 'city'=>$city, 'uhqs'=>$uhqs, 'hqls'=>$hqls]);
    }


    public function users()
    {
        $users = User::where('id','!=',Auth::user()->id)->paginate(5);
        
        return view('user.usersList', ['users'=>$users]);
    }
}
