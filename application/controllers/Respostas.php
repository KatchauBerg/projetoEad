<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class respostas extends CI_Controller
{
	public function index()
	{
		$this->load->view('pages/aluno/respostas');
	}
}
