<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\BusinessMailingAddress;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PersonalUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::role('Personal')->paginate(20);
        return view('admin.personal.list', compact('users'));
    }

    public function verified()
    {
        $users = User::role('Personal')->where('status', 1)->orderBy('id', 'desc')->paginate(20);
        return view('admin.personal.list', compact('users'));
    }

    public function unverified()
    {
        $users = User::role('Personal')->where('status', 0)->orderBy('id', 'desc')->paginate(20);
        return view('admin.personal.list', compact('users'));
    }

    public function verifyUser(Request $request)
    {
        $user = User::find($request->userid);
        $user->status = 1;
        $user->save();
        return redirect()->route('admin.unverified-users')->with('success','User Account Verified Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname'     => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile'        => ['required', 'max:11', 'min:10', 'unique:users'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User;
        $user->firstname            = $request->firstname;
        $user->lastname             = $request->lastname;
        $user->business_name        = $request->business_name;
        $user->email                = $request->email;
        $user->mobile               = $request->mobile;
        $user->password             = Hash::make($request->password);
        $user->email_verified_at    = Carbon::now();

        if($request->hasfile('avatar')){

            $image = $request->file('avatar');

            $name = $image->getClientOriginalName();

            $image->storeAs('uploads/user/', $name, 'public');

            if(isset($user->avatar)){

                $path = 'public/uploads/user/'.$user->avatar;

                Storage::delete($path);

            }

            $user->avatar = $name;

        }
        $user->status           = $request->status;
        $user->save();

        $user->assignRole('Personal');
        $address = new BusinessMailingAddress;
        $address->address_1 = $request->address_1;
        $address->address_2 = $request->address_2;
        $address->city      = $request->city;
        $address->state     = $request->state;
        $address->zipcode   = $request->zipcode;
        $address->country   = $request->country;

        $user->mailingAddress()->save($address);
        $user->assignRole('Personal');

        return redirect()->route('admin.personal-users.index')->with('success', 'Personal User Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.personal.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $user->avatar = isset($user->avatar) ? asset('storage/uploads/user/'.$user->avatar) : URL::to('assets/images/placeholder.png') ;
        return view('admin.personal.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname'     => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'mobile'        => ['required', 'max:11', 'min:10', 'unique:users,mobile,' . $id],
        ]);

        $user = User::find($id);
        $user->firstname        = $request->firstname;
        $user->lastname         = $request->lastname;
        $user->business_name    = $request->business_name;
        $user->email            = $request->email;
        $user->mobile           = $request->mobile;
        $user->status           = $request->status;
        if($request->hasfile('avatar')){

            $image = $request->file('avatar');

            $name = $image->getClientOriginalName();

            $image->storeAs('uploads/user/', $name, 'public');

            if(isset($user->avatar)){

                $path = 'public/uploads/user/'.$user->avatar;

                Storage::delete($path);

            }

            $user->avatar = $name;

        }
        $user->save();

        $address_exists = BusinessMailingAddress::where('business_user_id', $id)->exists();

        if ($address_exists) {

            BusinessMailingAddress::where('business_user_id', $id)->update([
                'address_1' => $request->address_1,
                'address_2' => $request->address_2,
                'city'      => $request->city,
                'state'     => $request->state,
                'zipcode'   => $request->zipcode,
                'country'   => $request->country,
            ]);

        } else {

            $address = new BusinessMailingAddress;
            $address->address_1 = $request->address_1;
            $address->address_2 = $request->address_2;
            $address->city      = $request->city;
            $address->state     = $request->state;
            $address->zipcode   = $request->zipcode;
            $address->country   = $request->country;

            $user->mailingAddress()->save($address);
        }

        return redirect()->route('admin.personal-users.index')->with('success', 'Personal User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.personal-users.index')->with('success', 'Personal User Deleted Successfully');
    }
}
