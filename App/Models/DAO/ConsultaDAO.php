<?php
namespace App\Models\DAO;

use App\Models\Entidades\Consulta;

class ConsultaDAO extends BaseDAO
{
    

    public  function salvar(Consulta $consulta) {
        try {
            $data      = $consulta->getData();
            $turno     = $consulta->getTurno();
            $medico     = $consulta->getMedico()->getId();
            $paciente     = $consulta->getPaciente()->getId();
            return $this->insert(
                'paciente',
                ":data_consulta,:turno,:id_medico_fk,:id_paciente_fk",
                [
                    ':data_consulta'=>$data,
                    ':turno'=>$turno,
                    ':id_medico_fk'=>$medico,
                    ':id_paciente_fk'=>$paciente
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }
}

?>