<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home-login');
	}
	public function login()
	{
		$template_id = filter_input(INPUT_GET, 'template_id', FILTER_SANITIZE_STRING);
		//$sql = "select * from templates where template_id = ?";
		//$templates_id = $this->db->query($sql, [$template_id])->getRow();
		return redirect()->to('http://rewriter.local/home/template?template_id=' . $template_id);
	}
}
