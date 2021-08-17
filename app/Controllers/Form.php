<?php

namespace App\Controllers;

use App\Libraries\Queries;

class Form extends BaseController
{
    public function config()
    {
        $input = json_decode(file_get_contents('php://input'));
		$biz_form_id = $input->biz_form_id ?? '';
		$biz_form_id = filter_var($biz_form_id, FILTER_SANITIZE_STRING);

		$config_row = $this->db->query(
			Queries::GetGenericFormConfigById,
			[$biz_form_id]
		)->getRow();
		
		$config = json_decode($config_row->config);
		$result = ['status' => 'ok', 'config' => $config];
		
		return $this->response->setJSON($result); 
    }
}