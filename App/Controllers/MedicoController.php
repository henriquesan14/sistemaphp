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

    public function edicao($params)
    {
        $id = $params[0];

        $medicoDAO = new MedicoDAO();

        $medico = $medicoDAO->getById($id);

        if(!$medico){
            Sessao::gravaMensagem("Medico inexistente");
            $this->redirect('/medico');
        }

        self::setViewParam('medico',$medico);

        $this->render('/medico/editar');

        Sessao::limpaMensagem();

    }

    public function atualizar()
    {

        $Medico = new Medico();
        $Medico->setId($_POST['id']);
        $Medico->setNome($_POST['nome']);
        $Medico->setEspecialidade([$_POST['especialidade']]);
        $Medico->setCrm($_POST['crm']);
        $Medico->setCpf($_POST['cpf']);
        $Medico->setTelefone($_POST['telefone']);

        Sessao::gravaFormulario($_POST);


        $medicoDAO = new MedicoDAO();


        $medicoDAO->atualizar($Medico);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::gravaMensagem("Medico Atualizado");

        $this->redirect('/medico');

    }
    
    public function exclusao($params)
    {
        $id = $params[0];

        $medicoDAO = new MedicoDAO();

        $medico = $medicoDAO->getById($id);

        if(!$medico){
            Sessao::gravaMensagem("Medico inexistente");
            $this->redirect('/medico');
        }

        self::setViewParam('medico',$medico);

        $this->render('/medico/exclusao');

        Sessao::limpaMensagem();
    }

    public function excluir()
    {
        $Medico = new Medico();
        $Medico->setId($_POST['id']);

        $medicoDAO = new MedicoDAO();


        if(!$medicoDAO->excluir($Medico)){
            Sessao::gravaMensagem("Medico inexistente");
            $this->redirect('/medico');
        }

        Sessao::gravaMensagem("Medico excluido com sucesso!");

        $this->redirect('/medico');

    }

}