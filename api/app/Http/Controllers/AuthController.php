<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();          
            $name = explode(" ", $user->name);
            $name = $name[0];
            return response()->json([
                'message'  => 'Login successful',
                'email'    => $user->email,
                'name'     => $name,
                'fullname' => $user->name
            ]);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }

    public function cadastro(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),    
        ]);

        return response()->json(['message' => 'Cadastro successful', 'user' => $user]);
    }
}
