<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\File;
use Response;

class EnquiresController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $enquiries = Enquiry::where('user_id', Auth::user()->id)->latest()->paginate(20);
        return view('personal.enquires.list', compact('enquiries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.enquires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $this->validate($request, [
            'customer'              => ['required', 'string', 'max:255'],
            'product_type'          => ['required', 'string'],
            'pti_no'                => ['required', 'string'],
            'job_no'                => ['required', 'string'],
            'panel_name'            => ['required', 'string'],
            'construction_type'     => ['required', 'string'],
        ]);

        $enquiry = new Enquiry;
        $enquiry->user_id           = $id;
        $enquiry->customer_details  = $request->customer;
        $enquiry->product_type      = $request->product_type;
        $enquiry->pti_no            = $request->pti_no;
        $enquiry->job_no            = $request->job_no;
        $enquiry->panel_name        = $request->panel_name;
        $enquiry->construction_type = $request->construction_type;
        $enquiry->rating            = $request->rating;
        $enquiry->save();

        $files = $request->file('files');

        if ($request->hasFile('files')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();

                $file->storeAs('uploads/enquiries/' . $id . '/' . $enquiry->id . '/files', $name, 'public');

                $file               = new File;
                $file->user_id      = $id;
                $file->enquiry_id   = $enquiry->id;
                $file->filename     = $name;
                $file->save();
            }
        }

        return redirect()->route('personal.enquiries.index')->with('success', 'Enquiry Saved Successfully');
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
        return view('personal.enquires.show', compact('enquiry', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enquiry = Enquiry::find($id);
        $enquiry->load('files');
        return view('personal.enquires.edit', compact('enquiry'));
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
        $userid = Auth::user()->id;
        $this->validate($request, [
            'customer'              => ['required', 'string', 'max:255'],
            'product_type'          => ['required', 'string'],
            'pti_no'                => ['required', 'string'],
            'job_no'                => ['required', 'string'],
            'panel_name'            => ['required', 'string'],
            'construction_type'     => ['required', 'string'],
        ]);

        $enquiry = Enquiry::find($id);
        $enquiry->customer_details  = $request->customer;
        $enquiry->product_type      = $request->product_type;
        $enquiry->pti_no            = $request->pti_no;
        $enquiry->job_no            = $request->job_no;
        $enquiry->panel_name        = $request->panel_name;
        $enquiry->construction_type = $request->construction_type;
        $enquiry->rating            = $request->rating;
        $enquiry->save();

        $files = $request->file('files');

        if ($request->hasFile('files')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();

                $file->storeAs('uploads/enquiries/' . $userid . '/' . $id . '/files', $name, 'public');

                $file               = new File;
                $file->user_id      = $userid;
                $file->enquiry_id   = $id;
                $file->filename     = $name;
                $file->save();
            }
        }

        return redirect()->route('personal.enquiries.index')->with('success', 'Enquiry Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userid = Auth::user()->id;

        $enquiry = Enquiry::find($id);
        $enquiry->load('files');
        foreach($enquiry->files as $file){
            $path = 'public/uploads/enquiries/' . $file->user_id . '/' . $file->enquiry_id . '/files' . '/' . $file->filename;
            Storage::delete($path);
        }

        Enquiry::find($id)->delete();

        return redirect()->route('personal.enquiries.index')->with('success', 'Enquiry Deleted Successfully');
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
