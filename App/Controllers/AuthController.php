<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entidades\Usuario;

class AuthController extends Controller
{
    public function index()
    {
        $this->renderLogin('/auth/index');
        Sessao::limpaMensagem();
    }

    public function logar()
    {
        $usuarioDAO = new UsuarioDAO();
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = $usuarioDAO->validaUsuario($email, $senha);
        
        if(!$usuario){
            Sessao::gravaMensagem('Login ou Senha incorretos');
            $this->redirect('/auth/index');
            Sessao::limpaMensagem();
        }
        
        Sessao::gravaUsuario($usuario);
 
        echo 'ok';
        
        $this->redirect('/home');
    }

    public function desloga()
    {
        Sessao::deslogaUsuario();
        Sessao::gravaMensagem('Desconectado');
        
        $this->redirect('/auth/index');
    }

    
    

}
