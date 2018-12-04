<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\ConsultaDAO;
use App\Models\DAO\MedicoDAO;
use App\Models\DAO\PacienteDAO;
use App\Models\Entidades\Consulta;

class ConsultaController extends Controller
{
    public function cadastro()
    {
        $medicoDAO = new MedicoDAO();
        self::setViewParam('listaMedicos',$medicoDAO->listar());
        $pacienteDAO = new PacienteDAO();
        self::setViewParam('listaPacientes',$pacienteDAO->listar());
        $this->render('/consulta/cadastro');
        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function salvar()
    {
        $Consulta = new Consulta();
        $Consulta->setData($_POST['data']);
        $Consulta->setTurno($_POST['turno']);
        $Consulta->getMedico()->setId($_POST['medico']);
        $Consulta->getPaciente()->setId($_POST['paciente']);

        Sessao::gravaFormulario($_POST);

        $consultaDAO = new ConsultaDAO();


        if($consultaDAO->salvar($Consulta)){
            $this->redirect('/consulta/sucesso');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }
    
    public function sucesso()
    {
        if(Sessao::retornaValorFormulario('nome')) {
            $this->render('/usuario/sucesso');

            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        }else{
            $this->redirect('/');
        }
    }

    public function index()
    {
        $consultaDAO = new ConsultaDAO();

        self::setViewParam('listaConsultas',$consultaDAO->listar());

        $this->render('/consulta/index');

        Sessao::limpaMensagem();
    }

}