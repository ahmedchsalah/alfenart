<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(SignupRequest $request){
        $data = $request->validated();
        $user = User::create($data);
        $token=$user->createToken('main')->plainTextToken;
        return response()->json(['user' => $user, 'token' => $token]);
    }
    public function login(LoginRequest $request){
        $data = $request->validated();
        if(!Auth::attempt($data)){
            return response()->json(['error' => 'provided email and password are incorrect'], 401);
        }
        $user = Auth::user();
        $token=$user->createToken('main')->plainTextToken;
        return response()->json(['user' => $user, 'token' => $token]);
    }

    public function logout(){
        $user = Auth::user();
        $user->tokens()->delete();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
