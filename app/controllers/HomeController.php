<?php

class HomeController extends BaseController {

	/**
	 * Home controller is the view for the users login
	 */

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin()
	{
		// show the login form 
		return View::make('login');
	}

	public function doLogout()
	{
	    Auth::logout(); 
	    return Redirect::to('login');
	}

	public function sendLogin()
	{
		// creates validations for the inputs 
		$rules = array(
			'email'    => 'required|email', 
			'password' => 'required|alphaNum|min:3' 
		);

		// run the validations 
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, shows the errors 
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) 
				->withInput(Input::except('password')); 
		} else {

			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// authenticate the user
			if (Auth::attempt($userdata)) {

				//success now redirect to the internal views
				echo 'SUCCESS!';

			} else {

				// validation not successful, shows an error
				Session::flash('message','The email address or password you entered do not match.');
				Session::flash('class','danger');
				return Redirect::to('login');

			}

		}
	}

}