<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Facades\Auth;

class AuthService extends Service
{
    public function view()
    {
        return view('auth.login');
    }

    public function credentials($email, $password) {
        return [
            'email'     => $email,
            'password'  => $password,
        ];
    }

    public function login($request) {
        if (Auth::attempt($this->credentials($request->email, $request->password))) {
           return true;
        }
        return false;
    }

    public function createToken($email) {
        $user   = User::where('email', $email)->first();
        $user->tokens()->delete();
        return $user->createToken('token')->plainTextToken;
    }

}
