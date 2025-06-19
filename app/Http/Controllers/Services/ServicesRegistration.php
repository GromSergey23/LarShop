<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ServicesRegistration extends Controller
{
    public function register($registerUserRequest)
    {

////        $pass = HASH::make($request->get('reg-password'));
        $validated = $registerUserRequest->validated();
//        dd($validated);
        User::create([
            'name' => $validated['reg_name'],
            'login' => $validated['reg_login'],
            'email' => $validated['reg_email'],
            'password' => HASH::make($validated['reg_password']),
        ]);
    }
}
