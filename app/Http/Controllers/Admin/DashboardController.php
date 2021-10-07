<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enquiry;
class DashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {    $users = User::latest()->get();
        $enquiries = Enquiry::with('user')->latest()->get();
        return view('admin.dashboard', compact('users', 'enquiries'));
    }
}
