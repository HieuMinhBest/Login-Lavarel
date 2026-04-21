<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Services\SocialAuthService;
use Exception;

class SocialLoginController extends Controller
{
    protected $socialAuthService;

    public function __construct(SocialAuthService $socialAuthService)
    {
        $this->socialAuthService = $socialAuthService;
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

            $this->socialAuthService->handleUser($socialUser, $provider);

            return redirect('/dashboard')->with('success', 'Đăng nhập thành công!');

        } catch (Exception $e) {
            return redirect('/login')->with('error', 'Đăng nhập thất bại hoặc bị hủy: ' . $e->getMessage());
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}