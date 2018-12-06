<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entidades\Usuario;

class AuthController extends Controller
{

    public function index(){
        $this->render('/auth/index');
    }

    

    public function logar(){
        $usuarioDAO = new UsuarioDAO();
        $email = $_POST['nome'];
        $senha = $_POST['senha'];
        $usuario = $usuarioDAO->validaUsuario($email,$senha);

        if(!$usuario){
            Sessao::gravaMensagem("Login ou Senha incorreto(s)");
            $this->redirect('/login');
        }

        self::setViewParam('usuarioLogado',$usuario);
 
        $this->render('/usuario/index');
    }

    public function deslogaUsuario(){
        
    }

    
    

}