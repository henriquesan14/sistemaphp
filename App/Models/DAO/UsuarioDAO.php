<?php

namespace App\Models\DAO;

use App\Models\Entidades\Usuario;

class UsuarioDAO extends BaseDAO
{
    public function verificaEmail($email)
    {
        try {

            $query = $this->select(
                "SELECT * FROM usuario WHERE email = '$email' "
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public  function salvar(Usuario $usuario) {
        try {
            $nome      = $usuario->getNome();
            $email     = $usuario->getEmail();
            $senha     = $usuario->getSenha();
            return $this->insert(
                'usuario',
                ":nome,:email,:senha",
                [
                    ':nome'=>$nome,
                    ':email'=>$email,
                    ':senha'=>$senha
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }


    public  function listar()
    {
 
        $resultado = $this->select(
            'SELECT id, nome,email,senha FROM usuario'
        );
        return $resultado->fetchAll(\PDO::FETCH_CLASS, Usuario::class);
 
    }

    public  function atualizar(Usuario $usuario)
    {
        try {

            $id             = $usuario->getId();
            $nome           = $usuario->getNome();
            $email          = $usuario->getEmail();
            $senha          = $usuario->getSenha();

            return $this->update(
                'usuario',
                "nome = :nome, email= :email, senha = :senha",
                [
                    ':id'=>$id,
                    ':nome'=>$nome,
                    ':email'=>$email,
                    ':senha'=>$senha
                ],
                "id = :id"
            );

        } catch (\Exception $e) {
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Usuario $usuario)
    {
        try {
            $id = $usuario->getId();

            return $this->delete('usuario',"id = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao excluir", 500);
        }
    }

    public function validaUsuario($email,$senha){
        $resultado = $this->select("SELECT * FROM usuario WHERE email = $email AND senha = $senha");

        return $resultado->fetchObject(Usuario::class);
    }

    public  function getById($id)
    {
        $resultado = $this->select(
            "SELECT id, nome,email,senha FROM usuario WHERE id = $id"
        );

        return $resultado->fetchObject(Usuario::class);

    }


}