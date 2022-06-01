<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller
{
	public function index()
	{
		$this->load->view('pages/login');
	}

	public function enviaDadosLogin()
	{
		$dadosLogin = $this->input->post();
		$dadosLogin = (object) $dadosLogin;

		$dadosRa = $dadosLogin->ra;
		$dadosSenha = $dadosLogin->senha;

	}
}
