<?php

class IndexController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Index Controller
	|--------------------------------------------------------------------------
	*/

	public function showIndex()
	{
		return View::make('index');
	}

}
