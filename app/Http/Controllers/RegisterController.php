<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;


class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function register(Request $request){
        // dd($request);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => $request->password,
            'password' => Hash::make($request->password)
        ]);
        auth()->login($user);

        return redirect('/appointments')->with('success', 'Succesfully save');
        
    }
}
