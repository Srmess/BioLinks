<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        if ($request->attempt()) {
            return to_route('dashboard');
        }

        return back()->with(['message' => 'Erro ao criar usuário']);
    }
}
