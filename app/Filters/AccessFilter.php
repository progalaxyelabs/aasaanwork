<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AccessFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = service('auth');
        $isSignedIn = $auth->isSignedIn();

        $router = service('router');
        $controllerName = $router->controllerName();

        $controllerName = strtolower(str_replace('\\App\\Controllers\\', '', $controllerName));        
        
        // these controllers can be accessed irrespective of signin-status
        $unrestrictedAccess = [
            'landing',
            'signout'
        ];

        if (in_array($controllerName, $unrestrictedAccess)) {
            return;
        }

        if ($controllerName === 'access') {
            if ($isSignedIn) {
                return redirect()->to('/dashboard');
            } else {
                return;
            }
        } else {
            if ($isSignedIn) {
                return;
            } else {
                return redirect()->to('/access');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
