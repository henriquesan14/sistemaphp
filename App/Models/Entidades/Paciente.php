<?php

namespace App\Models\Entidades;

class Paciente{

	private $id;
	private $nome;
	private $cpf;
	private $rg;
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

	public function getCpf() {
	    return $this->cpf;
	}
	 
	public function setCpf($cpf) {
	    $this->cpf = $cpf;
	}

	public function getRg() {
	    return $this->rg;
	}
	 
	public function setRg($rg) {
	    $this->rg = $rg;
	}

	public function getTelefone() {
	    return $this->telefone;
	}
	 
	public function setTelefone($telefone) {
	    $this->telefone = $telefone;
	}

}

?>