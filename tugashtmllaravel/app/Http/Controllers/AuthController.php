<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('pages.register');
    }

    public function welcome(Request $request) {
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];

        return view ('pages.welcome', ['firstname' => $firstname, 'lastname' => $lastname]);
    }
}
