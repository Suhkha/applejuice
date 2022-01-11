<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Gallery;

class DropzoneController extends Controller
{
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone($id)
    {   
        $name = UserDetails::find($id)->first(['name'])->name;
        return view('admin-profile.gallery.index', compact('id', 'name'));
    }

    /**
     * Image Upload Code
     *
     * @return void
    */
    public function dropzoneStore(Request $request, $id)
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
}
