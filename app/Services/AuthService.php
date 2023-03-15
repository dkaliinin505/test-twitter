<?php

namespace App\Services;

use App\Contracts\AuthContract;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthService implements AuthContract
{

    public function authenticateUser(): bool
    {
        $user = Socialite::driver('twitter')->user();
        $findUser = User::where('twitter_id', $user->getId())->first();

        if ($findUser){
            Auth::login($findUser);

            return true;
        }

        return User::updateOrCreate(['email' => $user->getEmail()], [
            'name' => $user->getName(),
            'password' => encrypt('123456dummy'),
            'twitter_id' => $user->getId(),
            'twitter_token' => $user->token,
            'twitter_token_secret' => $user->tokenSecret,
        ]);
    }
}
