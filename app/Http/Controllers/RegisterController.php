<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return request()->all();

        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255'
        ]);

        // dd('registrasi berhasil');

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->name)
        ]);
        $user->save();

        return redirect('/login')->with('succes', 'registrasi success. please login');
    }
}
