<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class respostas extends CI_Controller
{
	public function index()
	{
		$this->load->view('pages/aluno/respostas');
	}

	public function enviaDadosLogin()
	{
		$getDadosLogin = $this->input->post();

		$x = $this->validaLogin($getDadosLogin['ra'], $getDadosLogin['senha']);
		print_r($x);


	}

	public function validaLogin($ra, $senhaUsuario)
	{

		$query = $this->db->get('mdctable')->result_array();


		$query = (object) $query;
		foreach ($query as $dadosUsuario)
		{
			$dadosUsuario = (object) $dadosUsuario;
			// var_dump([$dadosUsuario->Senha, $senhaUsuario]); exit;

			if($ra == $dadosUsuario->Ra_aluno &&  $senhaUsuario == $dadosUsuario->Senha)
			{
				// print_r($dadosUsuario->validaUsuario); exit;
				if($dadosUsuario->validaUsuario == '1')
				{
					echo "Bem vindo Professor";
				}
			}
			else
			{
				echo "Erro ao realizar o Login, Verifique Seus Dados";
				return;
			}
		}
	}
}
