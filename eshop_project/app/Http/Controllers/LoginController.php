<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*public function create()
    {
        return view('contents.login');
    }

    public function store()
    {
        if (auth()->attempt(request(['username', 'password'])) == false) {
            return "Wrong";
        }
        return redirect('main');
    }
*/
    public function show()
    {
        return view('contents.login');
    }
}
