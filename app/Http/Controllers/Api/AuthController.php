<?php

namespace random\Http\Controllers\Api;

use Illuminate\Http\Request;

use random\User;
use random\Http\Requests;
use random\Http\Requests\RegisterRequest;
use random\Http\Requests\LoginRequest;
use random\Http\Controllers\Controller;
use Tymon\JWTAuth\JWTAuth;
use JWTAuthException;

class AuthController extends Controller
{
    private $user;
    private $jwtauth;

    public function __construct(User $user, JWTAuth $jwtauth)
    {
        $this->user = $user;
        $this->jwtauth = $jwtauth;
    }

    public function register(RegisterRequest $request)
    {
        $newUser = $this->user->create([
            'name' => $request->get('name'),
            'number' => $request->get('number'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ]);

        if (!$newUser) {
            return response()->json(['failed_to_create_new_user'], 500);
        }

        return response()->json([
            'token' => $this->jwtauth->fromUser($newUser)
        ]);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $token = null;

        try {
            $token = $this->jwtauth->attempt($credentials);
            if (!$token) {
                return response()->json(['invalid_email_or_password'], 422);
            }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }

        return response()->json(compact('token'));
    }
}
