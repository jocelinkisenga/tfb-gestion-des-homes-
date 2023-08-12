<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash ;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;

class AuthenticatedController extends Controller
{
    

 public function register(Request $request){
        
        $validate = $request->validate([
                        'name' => 'required|string|max:255',
                        'email' => 'required|string|email|max:255|unique:users',
                        'password' => 'required|string|min:8',
                        ]);

        $user = User::create([
                   'name' => $validate['name'],
                   'email' => $validate['email'],
                   'password' => Hash::make($validate['password']),
                    ]);

        $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                        'access_token' => $token,
                        'token_type' => 'Bearer',
                    ]);
            
    }

    public function login(Request $request) {
            if (!Auth::attempt($request->only('email', 'password'))) {
                        return response()->json([
                                'message' => 'Invalid login details'
                                ], 401);
            }

            $user = User::where('email', $request['email'])->firstOrFail();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                    'access_token' => $token,
                    'token_type' => 'Bearer',
            ]);
    }
    

        public function me(Request $request) {
            return $request->user();
        }
}

