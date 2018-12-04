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
}

?>