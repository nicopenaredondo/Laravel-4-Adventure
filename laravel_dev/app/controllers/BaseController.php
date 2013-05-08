<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/*public function __construct()
	{

		Asset::add('tuivel-core-css','tuivel/css/core.tuivel.css');
		Asset::add('tuivel-email-js','tuivel/js/tuivel.js');
		parent::__construct();
	}*/

}