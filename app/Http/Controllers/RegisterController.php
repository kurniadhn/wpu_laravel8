<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // Retrieving All Request Input
        // return request()->all();

        // Hashing
        // $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // Flash Data
        // $request->session()->flash('success', 'Registration succesfully! Please login!');

        return redirect('/login')->with('success', 'Registration successfully! Please login!');
    }
}
