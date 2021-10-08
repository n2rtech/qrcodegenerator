<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\File;
use Response;
class EnquiryController extends Controller
{
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enquiry = Enquiry::find($id);
        $enquiry->load('files');
        $base_url = URL::to('/');
        $path = $base_url.'/results'.'/'.$enquiry->id;
        return view('admin.enquires.show', compact('enquiry', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function downloadFile($id)
    {
        $file = File::find($id);
        $storedFile = Storage::disk('public')->path('/uploads/enquiries/' . $file->user_id . '/' . $file->enquiry_id . '/files' . '/' . $file->filename);
        return Response::download($storedFile);
    }

    public function deleteFile($id)
    {

        $file = File::find($id);
        $enquiry_id = $file->enquiry_id;
        $path = 'public/uploads/enquiries/' . $file->user_id . '/' . $file->enquiry_id . '/files' . '/' . $file->filename;
        Storage::delete($path);
        $file->delete();
        return redirect()->route('personal.enquiries.edit', $enquiry_id)->with('success', 'File Deleted Successfully');
    }
}
