<?php

namespace App\Http\Controllers\Feature\Auth;

use App\Helpers\AlertHelper;
use App\Services\Auth\AuthService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index()
    {
        return $this->authService->view();
    }

    public function login(AuthRequest $request)
    {
        if ($this->authService->login($request) == true) {
            AlertHelper::soft('success', 'Anda berhasil login');
            return redirect('feature/keluarga');
        }
        AlertHelper::soft('danger', 'Email atau password salah');
        return back();
    }
}
