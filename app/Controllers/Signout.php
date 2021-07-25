<?php

namespace App\Controllers;

class Signout extends BaseController
{
    public function index()
    {
        $this->auth->signout();
        return redirect()->to('/');
    }
}
