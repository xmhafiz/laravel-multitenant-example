<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use Orchestra\Support\Facades\Tenanti;

class TaskController extends Controller
{
	public function index(Request $request) {

		// to get user's task
		
		// check id - this can be replaced with Auth user / subdomain in order to 
		// determine which tenant database to use
		$this->validate($request, [
			'user_id' => 'required'
		]);
		$user = User::find($request->user_id);

		// below line can be created once at middleware
		Tenanti::driver('user')->asDefaultConnection($user, 'user_{id}');

		return Task::all();
	}

    public function store(Request $request) {
    	$this->validate($request, [
    		'user_id' => 'required'
    	]);

		$user = User::find($request->user_id);
		Tenanti::driver('user')->asDefaultConnection($user, 'user_{id}');

    	Task::create([
    		'task_name' => $request->task_name
    	]);

        return ['status' => 'success'];
    }
}
