<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\ServicesRegistration;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{

    public function __construct(public ServicesRegistration $registration)
    {

    }

    public function showLoginPage(): View
    {
        return view('login');
    }

    public function showRegistrationForm(): View
    {
        return view('registrationForm');
    }

    public function registrationNewUser(RegisterUserRequest $registerUserRequest)
    {
        $this->registration->register($registerUserRequest);
    }
}

