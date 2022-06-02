<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reclamaLista extends CI_Controller
{
	public function index()
	{
		$this->load->view('pages/professor/reclamaLista');

	}

	public function dadosCadastro()
	{
		$getDadosCadastro = $this->input->post();

		$nomeAluno = $getDadosCadastro['nome'];
		$sobreNomeAluno = $getDadosCadastro['sobreNome'];
		$raAluno = $getDadosCadastro['ra'];
		$isAluno = $getDadosCadastro['valorOption'];
		$senhaAluno = $getDadosCadastro['senha'];
		$emailAluno = $getDadosCadastro['email'];

		$data = date('Y-m-d H:i:s');
		// print_r($data); exit;

		$this->cadastraUsuario($nomeAluno, $sobreNomeAluno, $raAluno, $isAluno,$emailAluno, $senhaAluno, $data);

	}

	public function cadastraUsuario($nome, $sobreNome, $ra, $isAluno, $email, $senha, $data)
	{

		$isAluno = (bool) $isAluno;

		$data =
		[
			'Ra_aluno' => $ra,
			'Senha' => $senha,
			'E-mail' => $email,
			'nome' => $nome,
			'sobrenome' => $sobreNome,
			'validaUsuario' => $isAluno,
			'Data_inclusao' => $data
		];

		$sql = $this->db->insert("mdctable", $data);
		return $sql;
	}
}
