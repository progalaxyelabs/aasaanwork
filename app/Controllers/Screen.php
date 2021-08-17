<?php

namespace App\Controllers;

use App\Libraries\Queries;

class Screen extends BaseController
{
    public function _remap($biz_name , $screen_name)
    {
        $customer_bizs = $this->db->query(
            Queries::GetCustomerBizById,
            [$this->auth->getCustomerId()]
        )->getResult();

        $customer_biz_id = 0;
        $customer_biz = null;
        foreach ($customer_bizs as $biz) {
            if (name_to_url($biz->customer_biz_name) === $biz_name) {
                $customer_biz_id = $biz->customer_biz_id;
                $customer_biz = $biz;
                break;
            }
        }

        if (!$customer_biz_id) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $biz_screens = $this->db->query(
            Queries::GetBizScreens,
            [$customer_biz_id]
        )->getResult();

        return view('biz', ['customer_biz' => $customer_biz,  'biz_screens' => $biz_screens]);
    }
}