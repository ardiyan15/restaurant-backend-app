<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Interfaces\AuthRepositoryInterface;
use App\Classes\ApiResponseClass;


class AuthController extends Controller
{

    private AuthRepositoryInterface $authRepositoryInterface;

    public function __construct(authRepositoryInterface $authRepositoryInterface)
    {
        $this->authRepositoryInterface = $authRepositoryInterface;
    }

    public function login(Request $request)
    {

        $data = $this->authRepositoryInterface->login($request);

        $token = $data['data'];
        $message = $data['message'];
        $code = $data['code'];

        return ApiResponseClass::sendResponse($token, $message, $code);
    }

    public function logout()
    {
        $data = $this->authRepositoryInterface->logout();
        $token = $data['data'];
        $message = $data['message'];
        $code = $data['code'];

        return ApiResponseClass::sendResponse($token, $message, $code);
    }
}
