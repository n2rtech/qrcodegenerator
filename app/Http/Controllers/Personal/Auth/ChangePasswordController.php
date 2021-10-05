<?php

namespace App\Http\Controllers\Personal\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function changePasswordForm()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('personal.auth.change-password', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $id = Auth::guard('admin')->id();

        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',

        ]);

        $user = User::find($id);

        if (Hash::check($request->get('current_password'), $user->password)) {

            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('personal.password.form')->with('success', 'Password changed successfully!');

        } else {

            return redirect()->back()->with('error', 'Current password is incorrect');
        }

        return redirect()->route('admin.password.form')->with('success', 'Password changed successfully');
    }

}
