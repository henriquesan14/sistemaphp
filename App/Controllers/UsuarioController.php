<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entidades\Usuario;

class UsuarioController extends Controller
{
    public function cadastro()
    {
        $this->render('/usuario/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function salvar()
    {
        $Usuario = new Usuario();
        $Usuario->setNome($_POST['nome']);
        $Usuario->setEmail($_POST['email']);
        $Usuario->setSenha($_POST['senha']);

        Sessao::gravaFormulario($_POST);

        $usuarioDAO = new UsuarioDAO();

        if($usuarioDAO->verificaEmail($_POST['email'])){
            Sessao::gravaMensagem("Email existente");
            $this->redirect('/usuario/cadastro');
        }

        if($usuarioDAO->salvar($Usuario)){
            Sessao::gravaMensagem("Usuário cadastrado com sucesso!");
            Sessao::limpaFormulario();
            $this->redirect('/usuario/index');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
            $this->redirect('/usuario/cadastro');
        }
    }
    
    

    public function index()
    {
        $usuarioDAO = new UsuarioDAO();
 
        self::setViewParam('listaUsuarios',$usuarioDAO->listar());
 
        $this->render('/usuario/index');
 
        Sessao::limpaMensagem();
    }

    

}