<?php
namespace App\Models\DAO;

use App\Models\Entidades\Medico;

class MedicoDAO extends BaseDAO
{
    

    public  function salvar(Medico $medico) {
        try {
            $nome      = $medico->getNome();
            $especialidade     = $medico->getEspecialidade();
            $crm    = $medico->getCrm();
            $cpf    = $medico->getCpf();
            $telefone = $medico->getTelefone();
            return $this->insert(
                'medico',
                ":nome,:especialidade,:crm,:cpf,:telefone",
                [
                    ':nome'=>$nome,
                    ':especialidade'=>$especialidade,
                    ':crm'=>$crm,
                    ':cpf'=>$cpf,
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
            'SELECT id , nome,especialidade,crm,cpf,telefone FROM medico'
        );
        return $resultado->fetchAll(\PDO::FETCH_CLASS, Medico::class);
 
    }

    public  function atualizar(Medico $medico)
    {
        try {

            $id             = $medico->getId();
            $nome           = $medico->getNome();
            $especialidade           = $medico->getEspecialidade();
            $crm           = $medico->getCrm();
            $cpf          = $medico->getCpf();
            $telefone     =$medico->getTelefone();

            return $this->update(
                'medico',
                "nome = :nome, especialidade= :especialidade, crm = :crm,cpf = :cpf, telefone = :telefone",
                [
                    ':id'=>$id,
                    ':nome'=>$nome,
                    ':especialidade'=>$especialidade,
                    ':crm'=>$crm,
                    ':cpf'=>$cpf,
                    ':telefone'=>$telefone
                ],
                "id = :id"
            );

        } catch (\Exception $e) {
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Medico $medico)
    {
        try {
            $id = $medico->getId();

            return $this->delete('medico',"id = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao excluir", 500);
        }
    }

    public  function getById($id)
    {
        $resultado = $this->select(
            "SELECT id, nome,especialidade,crm,cpf,telefone FROM medico WHERE id = $id"
        );

        return $resultado->fetchObject(Medico::class);

    }
}

?>