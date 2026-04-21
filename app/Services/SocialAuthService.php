<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthService
{
    public function handleUser($socialUser, $provider)
    {
        $user = User::where('provider_id', $socialUser->id)
                    ->orWhere('email', $socialUser->email)
                    ->first();

        if (!$user) {
            $user = User::create([
                'name' => $socialUser->name ?? $socialUser->nickname,
                'email' => $socialUser->email,
                'provider' => $provider,
                'provider_id' => $socialUser->id,
                'avatar' => $socialUser->avatar,
                'student_id' => '23810310407' 
            ]);
        } else {
            $user->update([
                'provider' => $provider,
                'provider_id' => $socialUser->id,
                'avatar' => $socialUser->avatar
            ]);
        }

        Auth::login($user);
    }
}