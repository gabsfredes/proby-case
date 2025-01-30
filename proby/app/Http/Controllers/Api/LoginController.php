<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function login(Request $request): JsonResponse {
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

    public function logout(User $user): JsonResponse {
        try {
            $user->tokens()->delete();

            return response()->json([
                'status' => true, 
                'message' => 'Logout realizado com sucesso.'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false, 
                'message' => 'Ocorreu um erro ao realizar logout.'], 400);
        }
    }
}
