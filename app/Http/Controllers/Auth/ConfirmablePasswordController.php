<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

final class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password page.
     */
    public function show(): Response
    {
        return Inertia::render('auth/confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        throw_unless(Auth::guard('web')->validate([
            'email' => $request->user()?->email,
            'password' => $request->password,
        ]), ValidationException::withMessages([
            'password' => __('auth.password'),
        ]));

        $request->session()->put('auth.password_confirmed_at', \Carbon\Carbon::now()->getTimestamp());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}
