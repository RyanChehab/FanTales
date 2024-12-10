<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class JWTAuthController extends Controller{
    
    public function login(Request $request){
    //Validating the request
    $credentials = $request->only('email', 'password');
    $validator = Validator::make($credentials, [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }
    }                                   
}
