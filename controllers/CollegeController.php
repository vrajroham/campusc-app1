<?php

class CollegeController extends BaseController {

	/**
	 * @return mixed
	 */
	public function index(){
		return View::make('college.dashboard');
	}
}
