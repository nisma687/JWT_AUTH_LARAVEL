<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user= User::all();
        return response()->json([
            'user' => $user,

        ]);
    }
    public function store(Request $request){
        $user = new User();
       
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json(['message' => 'User created successfully!']);
    }
}
