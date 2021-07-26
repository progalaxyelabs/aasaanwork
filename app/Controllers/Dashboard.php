<?php

namespace App\Controllers;

use App\Libraries\Queries;

class Dashboard extends BaseController
{
	public function index()
	{		
		$customer_biz = $this->db->query(
			Queries::GetCustomerBizById,
			[$this->auth->getCustomerId()]
		)
			->getResult();
		return view('dashboard', ['customer_biz' => $customer_biz]);
	}


	// public function get_biz_screens()
	// {
	// 	$customer_biz_id = filter_input()
	// 	$templateId = $this->auth->getTemplateId();
	// 	$screens = json_decode('[]');
	// 	if ($templateId) {
	// 		$sql = "
	// 		select custom_template_id,
	// 			config,
	// 			created_at,
	// 			last_updated_at
	// 		from custom_templates
	// 		where custom_template_id = ?
	// 		";
	// 		$custom_template = $this->db->query($sql, [$templateId])->getRow();
	// 		$screens = json_decode($custom_template->config);
	// 	}
	// 	return $this->response->setJSON(['config' => $custom_template]);
	// }
}
