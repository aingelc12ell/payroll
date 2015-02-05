<?php

class DashboardController extends BaseController {

	public function home()
	{
		return View::make('admin.home');
	}

}
