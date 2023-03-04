<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Services\Auth\AuthService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Resources\Api\Auth\AuthResource;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(AuthRequest $request)
    {
        return $this->tryCatch(function () use ($request) {
            if ($this->authService->login($request) == true) {
                $token = $this->authService->createToken($request->email);
                return new AuthResource ([
                    'token' => $token
                ]);
            }
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }, '', 'json');
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->noContent();
    }
}
