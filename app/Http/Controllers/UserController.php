<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

//add user model
use App\Models\User;
//bcrypt
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //register
    public function register(Request $request) {
        $fields = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|string|unique:users,email_address',
            'mobile_number' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        //create user
        $user = User::create([
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email_address' => $fields['email_address'],
            'mobile_number' => $fields['mobile_number'],
            'address' => $fields['address'],
            'status' => $fields['status'],
            'password' => bcrypt($fields['password'])
        ]);

        //create token
        $token = $user->createToken('userToken')->plainTextToken;

        //response
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    //login
    public function login(Request $request) {
        $fields = $request->validate([
            'email_address' => 'required|string',
            'password' => 'required|string'
        ]);

        //find user via email
        $user = User::where('email_address', $fields['email_address'])->first();

        //confirm password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Please double check credentials'
            ], 401);
        }

        //create token
        $token = $user->createToken('userToken')->plainTextToken;

        //response
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    //logout
    public function logout(Request $request) {

        //delete token from user
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Successfully Logged out'
        ];
    }
}
