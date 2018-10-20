<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // I stop in this area
        return Validator::make($data, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'patronymic' => 'required|max:255',
            'mother_name' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
            'email' => 'required|email|max:255|unique:users',
            'gender' => 'required|max:255',
            //'phone_number' => 'required|max:255',
            'date' => 'required|date_format:Y-m-d',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'patronymic' => $data['patronymic'],
            'mother_name' => $data['mother_name'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'gender' => $data['gender'],
            //'phone_number' => $data['phone_number'],
            'date' => $data['date'],
            'country_id' => $data['country_id'],
            'region_id' => $data['region_id'],
            'city_id' => $data['city_id'],
            'school_id' => $data['school_id'],
            'university_id' => $data['university_id'],
        ]);
    }
}
