<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/Articles/getArticle';

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
        return Validator::make($data, [
            'Name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'Email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return User::create([
            'Name' => $data['Name'],
            'Family' => $data['Family'],
            'Name_fa' => $data['Name_fa'],
            'Family_fa' => $data['Family_fa'],
            'FatherName' => $data['FatherName'],
            'BirthCert' => $data['BirthCert'],
            'MobileNumber' => $data['MobileNumber'],
            'PhoneNumber' => $data['PhoneNumber'],
            'Field' => $data['Field'],
            'Edu' => $data['Edu'],
            'City' => $data['City'],
            'City_fa' => $data['City_fa'],
            'Country' => $data['Country'],
            'Rank' => $data['Rank'],
            'Org' => $data['Org'],
            'Org_fa' => $data['Org_fa'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
