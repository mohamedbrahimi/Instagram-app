<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {
                $email;
                if(!is_null($providerUser->getEmail())) 
                    $email = $providerUser->getEmail();
                else $email = '----';
                $user = User::create([
                
                    'email'     => $email,
                    'name'      => $providerUser->getName(),
                    'password'  => 'facebookLogin',
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}