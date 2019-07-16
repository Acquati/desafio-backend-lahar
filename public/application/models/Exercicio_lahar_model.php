<?php

class Exercicio_lahar_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function consultar_tem_palavras($valor)
	{
		$valor1 = explode(' ', strtolower($valor['tentativa']));
		$valor2 = array();
		$query = $this->db->get("dados_exercicio");
		foreach ($query->result() as $r) {
			array_push($valor2, $r->valor);
		}

		if (!count($valor1) || !count($valor2) || count(array_diff($valor1, $valor2))) {
			$valor['correto'] = 'N';
		} else {
			$valor['correto'] = 'S';
		}

		if ($this->db->insert("resultado", $valor)) {
			return true;
		}
	}
}
