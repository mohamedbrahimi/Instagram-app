<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User as User;
use App\ProductsPhoto as ProductsPhoto;

class adminController extends Controller
{
    //
    public function redirect($type)
    {

      if($type == 'Gallery')
      return view('Admin/Gallery',array('allImages' => ProductsPhoto::all()));
      if($type == 'dh')
      return view('home_admin');


    }

    
}
