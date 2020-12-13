<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store()
    {
        $customer = new Customer();
        $customer->username = request('username');  
        $customer->name = request('name');
        $customer->surname = request('surname');
        $customer->password = request('password');
        $customer->email = request('email');
        $customer->gender = Input::get("inlineRadioOptions") == 'true' ? Female : Male;
        $customer->birthdate = request('birthday');
        $user = Customer::create(request(['name', 'email', 'password']));
        auth()->login($user);
        $customer->save();

        //return redirect('login')->with('mssg', 'Thanks for registrating!'); mssg = class
        return redirect('login');
    }
}
