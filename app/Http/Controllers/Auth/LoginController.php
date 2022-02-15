<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use App\Models\Account;

class LoginController extends Controller
{
    public function discord()
    {
        return Socialite::driver('discord')->redirect();
    }

    public function discordRedirect()
    {
        $user = Socialite::driver('discord')->user();

        $user = Account::updateOrCreate([
            'email' => $user->email,
        ], [
            'username' => $user->name,
            'discordid' => $user->id,
            'discriminator' => $user->user['discriminator'],
            'avatar' => $user->avatar,
            'verified' => $user->user['verified']
        ]);
        
        Auth::login($user, true);
        return redirect()->route('panel.home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
