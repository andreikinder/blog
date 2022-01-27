<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //

    public function create() {

        return view('sessions.create');
    }


    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye');

    }

    public function store(){

        $attributes = request()->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if (  !auth()->attempt($attributes)) {
            return back()->withErrors([
                'email' => 'Your provided credentials could not be verified'
            ]);
        }



        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');

    }
}
