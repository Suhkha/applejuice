<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Gallery;
use App\Models\Pdf;
use File;

class DropzoneController extends Controller
{
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function gallery($userId)
    {   
        $userDetails = UserDetails::where('user_id', $userId)->first();
        $name = $userDetails->name;
        $id = $userDetails->id;

        return view('admin-profile.gallery.index', compact('id', 'name', 'userId'));
    }

    /**
     * Image Upload Code
     *
     * @return void
    */
    public function galleryStore(Request $request, $id)
    {
        $file = $request->file('file');
        $path = public_path() . '/patients';
        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);
        
        $gallery = new Gallery;
        $gallery->image = $fileName;
        $gallery->user_id = $id;
        $gallery->save();
    
        return "yes";
    }

    public function pdf($userId)
    {   
        $userDetails = UserDetails::where('user_id', $userId)->first();
        $name = $userDetails->name;
        $id = $userDetails->id;

        return view('admin-profile.pdf.index', compact('id', 'name', 'userId'));
    }

    /**
     * Image Upload Code
     *
     * @return void
    */
    public function pdfStore(Request $request, $id)
    {
        $file = $request->file('file');
        $path = public_path() . '/pdf';
        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);
        
            $pdf = new Pdf;
            $pdf->pdf = $fileName;
            $pdf->user_id = $id;

            $pdf->save();
    
        return "yes";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePdf($id)
    {
        $pdf = Pdf::find($id);
        if(File::exists(public_path('pdf/'.$pdf->pdf))){
            File::delete(public_path('pdf/'.$pdf->pdf));
        }

        $pdf->delete();
        return redirect()->back();
    }
}
