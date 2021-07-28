<?php

namespace App\Controllers;

class Landing extends BaseController
{
	public function index()
	{
		$isSignedIn = $this->auth->isSignedIn();
		return view('landing', ['isSignedIn' => $isSignedIn]);
	}
	
}
