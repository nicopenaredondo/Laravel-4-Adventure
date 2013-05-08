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
		return View::make('home.index');
	}

	public function action_invite()
	{
		//getting all the input 
		$input = Input::all();
		//setting up the rules
		$rules = array('email' => 'required|email');	
		//creating the validator instance
		$validation = Validator::make($input,$rules);

		if( $validation->fails() ){
			//custom message
			//$messages = array('email_required' => '	We need to know your email address');
			//if validation fails thsi will return an error
			return Redirect::to('/')->with_errors($validation);
		}else{
			//if it passes then we insert it into the database and redirect it
			$new_post = array(
				'email'			=> Input::get('email'),
				'created_at'	=> date('Y-m-d h:i:s')
				);
			//fucking awesome fluent builder
			DB::table('contact_list')->insert($new_post);
			//redirecting back with a flash message
			return Redirect::to('/')->with('status','Thanks for signing up');
		}
	}
}