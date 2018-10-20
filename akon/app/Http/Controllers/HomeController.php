<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $country = DB::table('countries')->select('name')->where('id', $user->country_id)->first();
        $region = DB::table('regions')->select('name')->where('id', $user->region_id)->first();
        $city = DB::table('cities')->select('name')->where('id', $user->city_id)->first();
        $uhqs = DB::table('user_human_qualities')->where('user_id',Auth::user()->id)->get();
        $hqls = DB::table('human_qualities_list')->get();
        
        return view('user.home', ['user'=>$user, 'country'=>$country, 'region'=>$region, 'city'=>$city, 'uhqs'=>$uhqs, 'hqls'=>$hqls]);
    }
}
