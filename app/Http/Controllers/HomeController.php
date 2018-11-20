<?php

namespace App\Http\Controllers;
use App\User as User;
use App\ProductsPhoto as ProductsPhoto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userP = ProductsPhoto::where('public',1)->get();
        return view('home',array('userP' =>$userP));
    }
    public function user(){
        return view('dashboard/user');   
    }
    public function icons(){
        return view('dashboard/icons');   
    }
    public function maps(){
        return view('dashboard/maps');   
    }
    public function notifications(){
        return view('dashboard/notifications');   
    }
    public function table(){
        return view('dashboard/table');   
    }
    public function template(){
        return view('dashboard/template');   
    }
    public function typography(){
        $userP =User::find(Auth::id())->ProductsPhoto()->get();
        return view('dashboard/typography',array('userP' =>$userP)); 
    }
    public function upgrade(){
        return view('dashboard/upgrade'); 
    }         
 
}
