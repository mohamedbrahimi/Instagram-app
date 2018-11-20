<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SocialAccountService;
use Socialite;
use Auth;
class SocialAuthController extends Controller
{
    //
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback(SocialAccountService $service)
    {
        // when facebook call us a with token  
      //  $providerUser = Socialite::driver('facebook')->user(); 
      //  echo  var_dump($providerUser);
      //  return view('callback',array('provideSocialAccountService $servicerUser' =>$providerUser));

        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/home');
        

    }

}
