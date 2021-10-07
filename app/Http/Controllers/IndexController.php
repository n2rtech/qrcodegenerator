<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enquiry;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Response;
class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function results($id){
        $enquiry = Enquiry::find($id);
        $enquiry->load('files');
        $base_url = URL::to('/');
        $path = $base_url.'/results'.'/'.$enquiry->id;
        return view('frontend.results',  compact('enquiry', 'path'));
    }

    public function downloadFile($id)
    {
        $file = File::find($id);
        $storedFile = Storage::disk('public')->path('/uploads/enquiries/' . $file->user_id . '/' . $file->enquiry_id . '/files' . '/' . $file->filename);
        return Response::download($storedFile);
    }
}
