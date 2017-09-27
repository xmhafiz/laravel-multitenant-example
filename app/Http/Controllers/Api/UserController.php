<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

	public function index() {
		return User::all();
	}

    public function store(Request $request) {
    	User::create([
    		'name' => $request->name,
    		'email' => $request->name . '@example.com',
    		'password' => 'secret',
    	]);

        return ['status' => 'success'];
    }
}
