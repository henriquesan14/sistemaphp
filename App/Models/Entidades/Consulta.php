<?php

namespace App\Models\Entidades;

class Consulta
{
	private $id;
	private $data;
	private $turno;
	private $medico;
	private $paciente;

	public function __construct()
    {
        $this->medico = new Medico();
        $this->paciente = new Paciente();
    }


	public function getId() {
	    return $this->id;
	}
	 
	public function setId($id) {
	    $this->id = $id;
	}

	public function getData() {
	    return $this->data;
	}
	 
	public function setData($data) {
	    $this->data = $data;
	}

	public function getTurno() {
	    return $this->turno;
	}
	 
	public function setTurno($turno) {
	    $this->turno = $turno;
	}

	public function getMedico(){
		return $this->medico;
	}

	public function setMedico($medico) {
		$this->medico = $medico;
	}

	public function getPaciente(){
		return $this->paciente;
	}

	public function setPaciente($paciente) {
		$this->paciente = $paciente;
	}
}





?>