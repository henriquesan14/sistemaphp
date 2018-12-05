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

    public function edicao($params)
    {
        $id = $params[0];

        $usuarioDAO = new UsuarioDAO();

        $usuario = $usuarioDAO->getById($id);

        if(!$usuario){
            Sessao::gravaMensagem("Usuario inexistente");
            $this->redirect('/usuario');
        }

        self::setViewParam('usuario',$usuario);

        $this->render('/usuario/editar');

        Sessao::limpaMensagem();

    }

    public function atualizar()
    {

        $Usuario = new Usuario();
        $Usuario->setId($_POST['id']);
        $Usuario->setNome($_POST['nome']);
        $Usuario->setEmail($_POST['email']);
        $Usuario->setSenha($_POST['senha']);

        Sessao::gravaFormulario($_POST);


        $usuarioDAO = new UsuarioDAO();

        if($usuarioDAO->verificaEmail($_POST['email'])){
            Sessao::gravaMensagem("Email existente");
            $this->redirect('/usuario/edicao/'.$Usuario->getId());
        }

        $usuarioDAO->atualizar($Usuario);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::gravaMensagem("Usuario Atualizado");

        $this->redirect('/usuario');

    }
    
    public function exclusao($params)
    {
        $id = $params[0];

        $usuarioDAO = new UsuarioDAO();

        $usuario = $usuarioDAO->getById($id);

        if(!$usuario){
            Sessao::gravaMensagem("Usuário inexistente");
            $this->redirect('/marca');
        }

        self::setViewParam('usuario',$usuario);

        $this->render('/usuario/exclusao');

        Sessao::limpaMensagem();
    }

    public function excluir()
    {
        $Usuario = new Usuario();
        $Usuario->setId($_POST['id']);

        $usuarioDAO = new UsuarioDAO();


        if(!$usuarioDAO->excluir($Usuario)){
            Sessao::gravaMensagem("Usuario inexistente");
            $this->redirect('/usuario');
        }

        Sessao::gravaMensagem("Usuário excluido com sucesso!");

        $this->redirect('/usuario');

    }

    

}