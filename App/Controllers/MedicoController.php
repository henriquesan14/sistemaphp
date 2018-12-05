<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\MedicoDAO;
use App\Models\Entidades\Medico;

class MedicoController extends Controller
{
    public function cadastro()
    {
        $this->render('/medico/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function salvar()
    {
        $Medico = new Medico();
        $Medico->setNome($_POST['nome']);
        $Medico->setEspecialidade($_POST['especialidade']);
        $Medico->setCrm($_POST['crm']);
        $Medico->setCpf($_POST['cpf']);
        $Medico->setTelefone($_POST['telefone']);

        Sessao::gravaFormulario($_POST);

        $medicoDAO = new MedicoDAO();


        if($medicoDAO->salvar($Medico)){
            Sessao::gravaMensagem("Médico cadastrado com sucesso!");
            Sessao::limpaFormulario();
            $this->redirect('/medico/index');
            
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }
    
    

    public function index()
    {
        $medicoDAO = new MedicoDAO();
 
        self::setViewParam('listaMedicos',$medicoDAO->listar());
 
        $this->render('/medico/index');
 
        Sessao::limpaMensagem();
    }

}