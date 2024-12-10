<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;

class JWTAuthController extends Controller{
    
    public function login(Request $request){
    //Validating the request
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    if (!$token = JWTAuth::attempt($credentials)) {
        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    return response()->json([
        'token' => $token,
        'user' => Auth::user(),
    ]);

    }              

    public function signup(Request $request){
        
    }
    
    
}
