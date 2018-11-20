<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;

use App\User as User;
use App\ProductsPhoto as ProductsPhoto;

class UploadController extends Controller
{
    //
    public function uploadForm()
    {
        return view('upload_form');
    }
 
    public function uploadSubmit(UploadRequest $request)
    {
        $desc  = $request->name;
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');

            
            ProductsPhoto::create([
                'user_id'      => Auth::id(),
                'filename'     => $filename,
                'description'  => $desc
                

            ]);
        }
        return 'Upload successful!';
    }
}
