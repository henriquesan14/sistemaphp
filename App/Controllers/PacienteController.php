<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\PacienteDAO;
use App\Models\Entidades\Paciente;

class PacienteController extends Controller
{
    public function cadastro()
    {
        $this->render('/paciente/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function salvar()
    {
        $Paciente = new Paciente();
        $Paciente->setNome($_POST['nome']);
        $Paciente->setCpf($_POST['cpf']);
        $Paciente->setRg($_POST['rg']);
        $Paciente->setTelefone($_POST['telefone']);

        Sessao::gravaFormulario($_POST);

        $pacienteDAO = new PacienteDAO();


        if($pacienteDAO->salvar($Paciente)){
            Sessao::gravaMensagem("Paciente cadastrado com sucesso!");
            Sessao::limpaFormulario();
            $this->redirect('/paciente/index');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }
    
    

    public function index()
    {
        $pacienteDAO = new PacienteDAO();
 
        self::setViewParam('listaPacientes',$pacienteDAO->listar());
 
        $this->render('/paciente/index');
 
        Sessao::limpaMensagem();
    }

}