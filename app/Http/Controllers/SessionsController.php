<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
       return view('sessions.create');
    }


    public function store()
    {
        //validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //attempt to authenticate and log in the user
        //based on a provided credentials
        if (!auth()->attempt($attributes)) {
            throw  ValidationException::withMessages([
                'email' => 'Your credentials do not match our records.'
            ]);

        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back');



    }




    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
