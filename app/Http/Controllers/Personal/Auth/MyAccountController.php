<?php

namespace App\Http\Controllers\Personal\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

class MyAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->avatar = isset($user->avatar) ? asset('storage/uploads/user/' . $user->avatar) : URL::to('assets/images/placeholder.png');
        return view('personal.auth.my-account', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        $user = User::find($id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->mobile = $request->mobile;

        if ($request->hasfile('avatar')) {

            $image = $request->file('avatar');

            $name = $image->getClientOriginalName();

            $image->storeAs('uploads/user/', $name, 'public');

            if (isset($user->avatar)) {

                $path = 'public/uploads/user/' . $user->avatar;

                Storage::delete($path);
            }

            $user->avatar = $name;
        }

        $user->save();

        return redirect()->route('personal.my-account.edit', $user->id)->with('success', 'Account updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
