<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User as User;
use App\ProductsPhoto as ProductsPhoto;
use App\Survey as Survey;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class manipulatData extends Controller
{
    //
    public function getUserProductsPhoto()
    {
    	$user = User::find(Auth::id());
    	
    	return $user->ProductsPhoto()->get();
    }

    public function showImage($id){
     $image = ProductsPhoto::find($id);
    return Storage::get($image->filename);
    }

    public function changeStatOfMedia(Request $req){
      
      return ProductsPhoto::where('id',$req->media_id)->update(['public' => $req->bool]);
     
    }
    public function reactMedia(Request $req){
        Survey::create([
                'products_photos_id'   => $req->ph_id,
                'user_id'     => $req->user_id,
                'like'        => 1,
                'unlike'      => 0
                
                

            ]);
    }
}
