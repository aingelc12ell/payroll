<?php

class InstallerController extends BaseController {	

	public function start()
	{
		//remove previous settings
		User::truncate();
		Setting::truncate();

		return View::make('installer.start');
	}

	public function save()
	{		

		$s = new Setting;
		$s->sitename = 	Input::get('txtSiteName');
		$s->save();	

		$u = new User;

		$u->username = Input::get('txtAdminUser');
		$u->password = Hash::make(Input::get('txtAdminPassword'));
		$u->role = 'admin';
		$u->email = Input::get('txtAdminEmail');

		$u->save();

		return View::make('installer.save');
	}

}
