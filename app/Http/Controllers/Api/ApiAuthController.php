<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'email.unique' => 'El email ya se encuentra registrado',
            'password.required' => 'El campo contraseña es obligatorio',
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->location = $request->input('location');
        $user->about = $request->input('about');
        $user->password = Hash::make($request->password);
        $user->personal_id = $request->input('personal_id');
        $user->save();      
        $token = $user->createToken('auth_token')->plainTextToken;
        $user->remember_token = $token;
        $user->save();
        return response()->json([
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'El campo email es obligatorio',
            'password.required' => 'El campo contraseña es obligatorio',
        ]);
        $user = User::where('email', $request->email)->first();
        $hasToken = $user->tokens()->exists();
        if ($hasToken) {
            // El usuario tiene al menos un token en la tabla personal_access_tokens
            return response()->json([
                'data' => $user,
                'access_token' => $hasToken,
                'token_type' => 'Bearer'
            ]);
        } else {
            // El usuario no tiene ningún token en la tabla personal_access_tokens
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out'], 200);
    }
}
