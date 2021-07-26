<?php

namespace App\Controllers;

use App\Libraries\Queries;

class Biz extends BaseController
{
    private $customer_biz = null;    
    private $biz_screen = null;

    /**
     * url will be either
     * /biz/business_name 
     * or
     * /biz/business_name/screen_name
     * 
     */
    public function _remap($biz_name = '', $screen_name = '')
    {
        if (empty($biz_name) || ($biz_name === 'index')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $biz_screens = $this->getBizScreens($biz_name);

        // if the request does not have a screen name in url, 
        // show all screens for this business and we are done
        if (empty($screen_name)) {
            return view('customer_biz', [
                'customer_biz' => $this->customer_biz,
                'biz_screens' => $biz_screens
            ]);
        }

        // arrived here means screen name is also provided in url
        // 
        $biz_forms = $this->getScreenContents($biz_screens, $screen_name);
        

        return view('biz_screen', [
            'customer_biz' => $this->customer_biz,
            'biz_screen' => $this->biz_screen,
            'biz_forms' => $biz_forms
        ]);
    }

    private function getBizScreens($biz_name)
    {
        $customer_bizs = $this->db->query(
            Queries::GetCustomerBizById,
            [$this->auth->getCustomerId()]
        )->getResult();

        $this->customer_biz = null;
        foreach ($customer_bizs as $biz) {
            if (name_to_url($biz->customer_biz_name) === $biz_name) {
                $this->customer_biz = $biz;
                break;
            }
        }

        if ($this->customer_biz === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $biz_screens = $this->db->query(
            Queries::GetBizScreens,
            [$this->customer_biz->customer_biz_id]
        )->getResult();

        return $biz_screens;
    }

    private function getScreenContents($biz_screens, $screen_name) {
        $this->biz_screen = null;
        foreach ($biz_screens as $screen) {
            if (name_to_url($screen->biz_screen_name) === $screen_name) {
                $this->biz_screen = $screen;
                break;
            }
        }

        if ($this->biz_screen === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $biz_forms = $this->db->query(
            Queries::GetBizForms,
            [$this->biz_screen->biz_screen_id]
        )->getResult();

        return $biz_forms;
    }
}
