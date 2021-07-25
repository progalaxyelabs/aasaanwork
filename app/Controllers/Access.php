<?php


namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Access extends BaseController
{

    public function index()
    {
        return view('signin-form');
    }


    public function signin_submit()
    {
        $in_data = $this->request->getPost();
        if (!$in_data) {
            return view('signin-form', ['signin_error' => 'Incorrect signin name or password']);
        }

        $signinname = $in_data['signinname'] ?? '';
        $password = $in_data['password'] ?? '';

        if ($signinname && $password && $this->auth->signin($signinname, $password)) {
            return redirect()->to('/dashboard');
        } else {
            return view('signin-form', ['signin_error' => 'Incorrect signin name or password']);
        }
    }
}
