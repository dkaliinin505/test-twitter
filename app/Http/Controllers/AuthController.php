<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Laravel\Socialite\Facades\Socialite;

final class AuthController extends Controller
{

    /**
     * @var AuthService
     */
    private readonly AuthService $authService;

    /**
     * @param AuthService $authService
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\Foundation\Application
     */
    public function handleTwitterCallback(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\Foundation\Application
    {
        $this->authService->authenticateUser();

        return redirect('/');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Illuminate\Http\RedirectResponse
     */
    public function redirectToTwitter(): \Symfony\Component\HttpFoundation\RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('twitter')->redirect();
    }
}
