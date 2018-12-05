<?php
namespace App\Models\DAO;

use App\Models\Entidades\Paciente;

class PacienteDAO extends BaseDAO
{
    

    public  function salvar(Paciente $paciente) {
        try {
            $nome      = $paciente->getNome();
            $cpf     = $paciente->getCpf();
            $rg     = $paciente->getRg();
            $telefone     = $paciente->getTelefone();
            return $this->insert(
                'paciente',
                ":nome,:cpf,:rg,:telefone",
                [
                    ':nome'=>$nome,
                    ':cpf'=>$cpf,
                    ':rg'=>$rg,
                    ':telefone'=>$telefone
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function listar()
    {
 
        $resultado = $this->select(
            'SELECT id , nome, cpf,rg, telefone FROM paciente'
        );
        return $resultado->fetchAll(\PDO::FETCH_CLASS, Paciente::class);
 
    }

    public  function atualizar(Paciente $paciente)
    {
        try {

            $id             = $paciente->getId();
            $nome           = $paciente->getNome();
            $cpf          = $paciente->getCpf();
            $rg          = $paciente->getRg();
            $telefone     =$paciente->getTelefone();

            return $this->update(
                'paciente',
                "nome = :nome, cpf= :cpf, rg = :rg, telefone = :telefone",
                [
                    ':id'=>$id,
                    ':nome'=>$nome,
                    ':cpf'=>$cpf,
                    ':rg'=>$rg,
                    ':telefone'=>$telefone
                ],
                "id = :id"
            );

        } catch (\Exception $e) {
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Paciente $paciente)
    {
        try {
            $id = $paciente->getId();

            return $this->delete('paciente',"id = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao excluir", 500);
        }
    }

    public  function getById($id)
    {
        $resultado = $this->select(
            "SELECT id, nome,cpf,rg,telefone FROM paciente WHERE id = $id"
        );

        return $resultado->fetchObject(Paciente::class);

    }
}

?>