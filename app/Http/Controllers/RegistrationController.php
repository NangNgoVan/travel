<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationController extends Controller
{
    //view
    public function create() {
    	return view('auth.signup');
    }

    //
    public function store() {

    	$this->validate(request(), [
    		'email' => 'required',
    		'password' => 'required | confirmed',
    		'username' => 'required',
    		'phonenumber' => 'required'
    	]);

    	$user = User::create([
    		'email' => request('email'),
    		'password' => Hash::make(request('password')),
    		'name' => request('username'),
    		'phone' => request('phonenumber')
    	]);


    	//save to database

    	//dd(request());
    }
}
