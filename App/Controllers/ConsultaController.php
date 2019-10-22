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

        $turnos = array('Manha', 'Tarde', 'Noite');

        self::setViewParam('listaTurnos', $turnos);
        self::setViewParam('listaMedicos', $medicoDAO->listar());
        
        $pacienteDAO = new PacienteDAO();
        
        self::setViewParam('listaPacientes', $pacienteDAO->listar());
        
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
            Sessao::gravaMensagem("Consulta agendada com sucesso!");
            Sessao::limpaFormulario();
            $this->redirect('/consulta/index');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }

    public function index()
    {
        $consultaDAO = new ConsultaDAO();

        self::setViewParam('listaConsultas', $consultaDAO->listar());

        $this->render('/consulta/index');

        Sessao::limpaMensagem();
    }

    public function edicao($params)
    {
        $id = $params[0];

        $consultaDAO = new ConsultaDAO();

        $consulta = $consultaDAO->getById($id);

        if(!$consulta){
            Sessao::gravaMensagem("Consulta inexistente");
            $this->redirect('/consulta');
        }

        $turnos = array('Manha', 'Tarde', 'Noite');

        self::setViewParam('listaTurnos', $turnos);

        $medicoDAO = new MedicoDAO();
        self::setViewParam('listaMedicos', $medicoDAO->listar());

        $pacienteDAO = new PacienteDAO();
        self::setViewParam('listaPacientes', $pacienteDAO->listar());

        self::setViewParam('consulta', $consulta);

        $this->render('/consulta/editar');

        Sessao::limpaMensagem();

    }

    public function atualizar()
    {
        $Consulta = new Consulta();
        $Consulta->setId($_POST['id']);
        $Consulta->setData($_POST['data']);
        $Consulta->setTurno($_POST['turno']);
        $Consulta->getMedico()->setId($_POST['medico']);
        $Consulta->getPaciente()->setId($_POST['paciente']);

        Sessao::gravaFormulario($_POST);

        $consultaDAO = new ConsultaDAO();

        $consultaDAO->atualizar($Consulta);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::gravaMensagem('Consulta Atualizada');

        $this->redirect('/consulta');

    }
    
    public function exclusao($params)
    {
        $id = $params[0];

        $consultaDAO = new ConsultaDAO();

        $consulta = $consultaDAO->getById($id);

        if(!$consulta){
            Sessao::gravaMensagem('Consulta inexistente');
            $this->redirect('/consulta');
        }

        self::setViewParam('consulta', $consulta);

        $this->render('/consulta/exclusao');

        Sessao::limpaMensagem();
    }

    public function excluir()
    {
        $Consulta = new Consulta();
        $Consulta->setId($_POST['id']);

        $consultaDAO = new ConsultaDAO();

        if(!$consultaDAO->excluir($Consulta)){
            Sessao::gravaMensagem('Consulta inexistente');
            $this->redirect('/consulta');
        }

        Sessao::gravaMensagem('Consulta excluida com sucesso!');

        $this->redirect('/consulta');
    }
}
