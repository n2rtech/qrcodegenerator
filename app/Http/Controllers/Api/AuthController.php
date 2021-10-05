<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\BusinessMailingAddress;

class AuthController extends Controller
{
     /**
     * handle user registration request
     */
    public function signup(Request $request){

        if ($request->user_type == 'personal') {

            $this->validate($request, [
                'firstname'     => ['required', 'string', 'max:255'],
                'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mobile'        => ['required', 'max:11', 'min:10', 'unique:users'],
                'password'      => ['required', 'string', 'min:6'],
                'user_type'     => ['required'],
            ]);
        }

        if ($request->user_type == 'business') {

            $this->validate($request, [
                'business_name' => ['required', 'string', 'max:255'],
                'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mobile'        => ['required', 'max:11', 'min:10', 'unique:users'],
                'password'      => ['required', 'string', 'min:8'],
                'address_1'     => ['required'],
                'city'          => ['required'],
                'state'         => ['required'],
                'zipcode'       => ['required'],
                'country'       => ['required'],
            ]);
        }

        if ($request->user_type == 'personal') {

            $user = User::create([
                'firstname'            => $request->firstname,
                'lastname'             => $request->lastname,
                'email'               => $request->email,
                'mobile'              => $request->mobile,
                'password'             => Hash::make($request->password),
            ]);

            $user->assignRole('Personal');
        }

        if ($request->user_type == 'business') {

        $user = User::create([
            'firstname'            => $request->business_name,
            'lastname'             => $request->lastname,
            'business_name'        => $request->business_name,
            'email'               => $request->email,
            'mobile'              => $request->mobile,
            'password'             => Hash::make($request->password),
        ]);

        $address = new BusinessMailingAddress;
        $address->address_1 = $request->address_1;
        $address->address_2 = $request->address_2;
        $address->city      = $request->city;
        $address->state     = $request->state;
        $address->zipcode   = $request->zipcode;
        $address->country   = $request->country;

        $user->mailingAddress()->save($address);
        $user->assignRole('Business');
    }

    $login_credentials=[
        'email'=>$request->email,
        'password'=>$request->password,
    ];

    if(auth()->attempt($login_credentials)){
        //generate the token for the user
        $replsips_login_token= auth()->user()->createToken('replsips_login_token@Section.io')->accessToken;
        //now return this token on success login attempt
        return response()->json(['token' => $replsips_login_token], 200);
    }

}

    /**
     * login user to our application
     */
    public function login(Request $request){
        $login_credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(auth()->attempt($login_credentials)){
            //generate the token for the user
            $replsips_login_token= auth()->user()->createToken('replsips_login_token@Section.io')->accessToken;
            //now return this token on success login attempt
            return response()->json(['token' => $replsips_login_token], 200);
        }
        else{
            //wrong login credentials, return, user not authorised to our system, return error code 401
            return response()->json(['error' => 'UnAuthorised Access'], 401);
        }
    }

    /**
     * This method returns authenticated user details
     */
    public function authenticatedUserDetails(){
        //returns details
        return response()->json(['authenticated-user' => auth()->user()], 200);
    }
}
