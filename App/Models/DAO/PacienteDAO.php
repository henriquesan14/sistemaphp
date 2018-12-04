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
}

?>