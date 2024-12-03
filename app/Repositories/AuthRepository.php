<?php

namespace App\Repositories;

use App\Models\User;
use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;


class AuthRepository implements AuthRepositoryInterface
{
    public function login($request)
    {
        $data = [];
        if (!Auth::attempt($request->only('email', 'password'))) {
            $data = [
                'data' => [],
                'message' => 'Unauthorized',
                'code' => 401,
            ];

            return $data;
        }

        $user = User::where('email', $request->email)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        $data = [
            'code' => 200,
            'data' => $token,
            'message' => 'Login success',
        ];

        return $data;
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();

        return [
            'code' => 200,
            'data' => [],
            'message' => 'Logout success',
        ];
    }
}
