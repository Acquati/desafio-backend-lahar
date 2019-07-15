<?php

class Exercicio_lahar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function formulario_teste_lahar()
	{
		$query = $this->db->get("dados_exercicio");
		$data['dados_exercicio'] = $query->result();

		$query = $this->db->get("resultado");
		$data['resultado'] = $query->result();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('form', $data);
	}

	public function processa_resultado_lahar()
	{
		$this->load->model('Exercicio_lahar_model');

		$valor = array('tentativa' => $this->input->post('tentativa'));
	
		$this->Exercicio_lahar_model->consultar_tem_palavras($valor);

		$query = $this->db->get("dados_exercicio");
		$data['dados_exercicio'] = $query->result();

		$query = $this->db->get("resultado");
		$data['resultado'] = $query->result();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('form', $data);
	}
}
