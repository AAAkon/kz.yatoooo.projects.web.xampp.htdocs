<?php

namespace App\Http\Controllers;

use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Birthday;
use App\Music;
use App\Task;
use App\Formula;
use App\Code;
use App\Person;

use Illuminate;
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
    
 
              return view('home', [
                'birthdays' => Birthday::where('user_id', Auth::id())->orderBy('birthdate', 'desc')->paginate(6),
                'musics' => Music::where('user_id', Auth::id())->orderBy('attach', 'desc')->paginate(2),
                'reminders' => Task::where('user_id', Auth::id())->orderBy('attach', 'desc')->orderBy('updated_at', 'desc')->paginate(4),
                'formulas' => Formula::where('user_id', Auth::id())->orderBy('attach', 'desc')->paginate(5),
                'codes' => Code::where('user_id', Auth::id())->orderBy('attach', 'desc')->orderBy('priority', 'desc')->paginate(3),
                'people' => Person::where('user_id', Auth::id())->orderBy('attach', 'desc')->orderBy('priority', 'desc')->paginate()
                ]);
    }
}
