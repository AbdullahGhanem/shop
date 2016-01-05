<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

class AuthController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    protected $username = 'username';
    protected $redirectTo = '/';
    protected $loginPath = '/login' ;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['username'] = str_slug($data['username'], "-");

        return Validator::make($data, [
            'name'     => 'required|max:255',
            'username' => 'required|max:50|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            'reffer'   => 'max:255',
            'password' => 'required|confirmed|min:6',
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
            $user = User::create([
                'name'     => $data['name'],
                'username' => str_slug($data['username'], "-"),
                'email'    => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            $profile = new Profile;
            $profile->location = 'egypt';
            $user->profile()->save($profile);

            $user->attachRole(3);

            return $user;
    }
}