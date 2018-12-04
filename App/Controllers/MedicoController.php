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
            $this->redirect('/medico/sucesso');
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
        $this->redirect('/medico/cadastro');
    }

}