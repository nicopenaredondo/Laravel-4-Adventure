<?php

class EntriesController extends BaseController
{

	#handles "GET / " request
	public function getIndex()
	{
		return View::make('home')->with('entries',Entry::all());
	}

	#handsles "POST /" request
	public function postIndex()
	{
		$entry = array(
			'username' 	=> 	Input::get('frmName'),
			'email'		=>	Input::get('frmEmail'),
			'comment'	=>	Input::get('frmComment') 
			);

		//save the guestbook entry to the database
		Entry::create($entry);
		return Redirect::to('/');
	}
	

}
