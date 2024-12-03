<?php

namespace App\Interfaces;

interface AuthRepositoryInterface
{
    public function login($request);
    public function logout();
}
