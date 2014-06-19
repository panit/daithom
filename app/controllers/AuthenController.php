<?php


class AuthenController extends BaseController{

	public function logout(){

		Auth::logout();
        Session::flush(); // Destroy all sessions

        // Redirect to loginpage
        return Redirect::to('/login')
		->with("message","You're logged out")
		->with("title","Please login");
	}

	public function showlogin(){

		return View::make('home.login')->with('title','Login');
	}
	
	public function login()
	{
		

		
    //
		
			$rules = array(
				'username'    => 'required', // make sure the email is an actual email
				'password' => 'required' // password can only be alphanumeric and has to be greater than 3 characters
			);

			// run the validation rules on the inputs from the form
			$validator = Validator::make(Input::all(), $rules);

			// if the validator fails, redirect back to the form
			if ($validator->fails()) {
				return Redirect::to('/')
					->with('message','Please input username and password');
				} else {

				// create our user data for the authentication
				$userdata = array(
					'username' 	=> Input::get('username'),
					'password' 	=> Input::get('password')
				);

				

				// attempt to do the login
				if (Auth::attempt($userdata)) {

					if (Input::get('username')=='radioadmin') {

						Session::put( 'role', 'administrator');
						Session::put( 'name', 'Administrator');
					}
					else{

						$role = User::where('username', '=', Input::get('username'))->firstOrFail();
	   					Session::put( 'role', $role->branch_id );
	   					Session::put( 'name', $role->fullName );
	   					Session::put( 'staff_id', $role->id );
					}

				
					
					return  Redirect::to('/');

				} else {	 	

					// validation not successful, send back to form	
					return Redirect::to('/login')->with('message', 'Username and Password are not correct');

				}

			}
	}


	
	

	


}



?>