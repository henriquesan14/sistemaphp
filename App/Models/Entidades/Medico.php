<?php

namespace App\Models\Entidades;

class Medico{

	private $id;
	private $nome;
	private $especialidade;
	private $crm;
	private $cpf;
	private $telefone;

	public function getId() {
	    return $this->id;
	}
	 
	public function setId($id) {
	    $this->id = $id;
	}

	public function getNome() {
	    return $this->nome;
	}
	 
	public function setNome($nome) {
	    $this->nome = $nome;
	}

	public function getEspecialidade() {
	    return $this->especialidade;
	}
	 
	public function setEspecialidade($especialidade) {
	    $this->especialidade = $especialidade;
	}

	public function getCrm() {
	    return $this->crm;
	}
	 
	public function setCrm($crm) {
	    $this->crm = $crm;
	}

	public function getCpf() {
	    return $this->cpf;
	}
	 
	public function setCpf($cpf) {
	    $this->cpf = $cpf;
	}

	public function getTelefone() {
	    return $this->telefone;
	}
	 
	public function setTelefone($telefone) {
	    $this->telefone = $telefone;
	}

}

?>