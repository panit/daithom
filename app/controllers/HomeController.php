<?php


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()

	{
		if (Auth::check())
		{
			$branches=Branch::all();
			return View::make('home.index')->with('title','Welcome to home')->with('branches',$branches);
			
		
		}
		return Redirect::to('/login')->with('title','Please login ');
		

		
	}

	


	
	public function createUser(){

		$user = new User;
		$user->username=Input::get("username");
		$user->password=Hash::make(Input::get("password"));
		$user->save();

	}
	public function updateUser(){

		$users = User::all();
		foreach ($users as $user) {
			DB::table('tblstaff')
            ->where('staff_id', $user->staff_id)
            ->update(array('password' => Hash::make($user->password)));
		}
	}

}
