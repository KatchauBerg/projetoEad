<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Hello World";
		$this->load->view('pages/cadastro', $data);

	}
}
