<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function sendResetResponse(Request $request, $response)
    {
        return response(['message' => trans($response)], 200);
    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response(['error' => trans($response)], 400);
    }

    protected function validationErrorMessages()
    {
        return [
            'email.required' => 'Email is required.',
            'password.required' => 'Password is required.',
            'password.confirmed' => 'Passwords do not match.',
            'password.min' => 'Password must be at least 8 characters.',
        ];
    }
}
