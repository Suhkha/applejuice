<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Gallery;
use App\Models\Pdf;

class DropzoneController extends Controller
{
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function gallery($id)
    {   
        $userDetails = UserDetails::find($id)->first();
        $name = $userDetails->name;
        $userId = $userDetails->user_id;

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

    public function pdf($id)
    {   
        $name = UserDetails::find($id)->first(['name'])->name;
        return view('admin-profile.pdf.index', compact('id', 'name'));
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
        $pdf->delete();

        return redirect()->back();
    }
}
