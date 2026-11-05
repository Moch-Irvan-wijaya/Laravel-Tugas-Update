<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(["success" => false, "message" => $validator->errors()], 422);
        }

        // role TIDAK diambil dari request supaya orang tidak bisa daftar sebagai admin
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'user',
        ]);

        return response()->json([
            "success" => true,
            "message" => "Register success",
            "data" => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(["success" => false, "message" => $validator->errors()], 422);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(["success" => false, "message" => "Email atau password salah"], 401);
        }

        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            "success" => true,
            "message" => "Login success",
            "data" => $user,
            "token" => $token
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(["success" => true, "message" => "Logout success"], 200);
    }
}