<?php

interface iTransactions
{
    public function getCashIn($userId);
    public function getCashOut($userId);
    //public function transfers($userId);
}

class HomeController extends \BaseController implements iTransactions {

	/**
	 * This function find all the transaction at cash in
	 * @param  [Integer] $id user id
	 * @return [Object]   
	 */
	public function getCashIn($id)
	{
		$values = Transaction::where('user', '=', $id)
				->where('type', '=', 'Cash in')
				->get();
		return View::make('home.cashIn')->with('values',$values)->with('userId', $id);
	}

	/**
	 * This function find all the transaction at cash out
	 * @param  [Integer] $id user id
	 * @return [Object]   
	 */
	public function getCashOut($id)
	{
		$values = Transaction::where('user', '=', $id)
				->where('type', '=', 'Cash Out')
				->get();
		return View::make('home.cashOut')->with('values',$values)->with('userId', $id);
	}

	/**
	 * edit the information fo the user
	 * @param  [Integer] $id user
	 * @return [type]  
	 */
	public function getEdit($id)
	{
		$user = User::find($id);
		return View::make('home.account')->with('user',$user);
	}

	/**
	 * Update the current user
	 * @param  [Integer]  $id
	 * @return Response
	 */
	public function updateUser($id)
	{
		$user = User::find($id);
		$user->name = Input::get('name');
		$user->username = Input::get('username');
		if ($user->save()) {
			Session::flash('message','Updated successfully!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Sorry, an error has occurred!');
			Session::flash('class','danger');
		}
		return Redirect::to('home/edit/'.$id);
	}

}