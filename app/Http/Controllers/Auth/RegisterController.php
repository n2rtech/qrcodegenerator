<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\BusinessMailingAddress;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
                'firstname'     => ['required', 'string', 'max:255'],
                'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mobile'        => ['required', 'max:11', 'min:10', 'unique:users'],
                'password'      => ['required', 'string', 'min:6', 'confirmed'],
                'address_1'     => ['required'],
                'city'          => ['required'],
                'state'         => ['required'],
                'zipcode'       => ['required'],
                'country'       => ['required'],
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
            $user = User::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'business_name' => $data['business_name'],
                'mobile' => $data['mobile'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'status' => 0,
            ]);

            $address = new BusinessMailingAddress;
            $address->address_1 = $data['address_1'];
            $address->address_2 = $data['address_2'];
            $address->city      = $data['city'];
            $address->state     = $data['state'];
            $address->zipcode   = $data['zipcode'];
            $address->country   = $data['country'];

            $user->mailingAddress()->save($address);
            $user->assignRole('Personal');

        return $user;
    }
}
