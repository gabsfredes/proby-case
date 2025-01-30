<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
          
            $user = Auth::user(); 

            $token = $request->user()->createToken('auth-api-Token')->plainTextToken;
          
            return response()->json([
                'status' => true, 
                'token' => $token,
                'message' => $user], 201);
        } else {
            return response()->json([
                'status' => false, 
                'message' => 'O login falhou, confira os dados e tente novamente'], 401);
        }
    }
}
