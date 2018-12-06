<?php
namespace App\Models\DAO;

use App\Models\Entidades\Consulta;

class ConsultaDAO extends BaseDAO
{
    

    public  function salvar(Consulta $consulta) {
        
            $data      = $consulta->getData();
            $turno     = $consulta->getTurno();
            $medico     = $consulta->getMedico()->getId();
            $paciente     = $consulta->getPaciente()->getId();
            return $this->insert(
                'consulta',
                ":data,:turno,:idMedico,:idPaciente",
                [
                    ':data'=>$data,
                    ':turno'=>$turno,
                    ':idMedico'=>$medico,
                    ':idPaciente'=>$paciente
                ]
            );

        
    }

    public  function listar()
    {

            $resultado = $this->select(
                'SELECT  c.id as idConsulta, 
                              c.data as dataConsulta, 
                              c.turno, 
                              p.nome as nomePaciente,
                              m.nome as nomeMedico
                              FROM consulta as c
                      INNER JOIN paciente as p ON c.idPaciente = p.id
                      INNER JOIN medico as m ON c.idMedico = m.id
                      '
            );
            $dataSetConsultas = $resultado->fetchAll();

            if($dataSetConsultas) {

                $listaConsultas = [];

                foreach($dataSetConsultas as $dataSetConsulta) {
                    $Consulta = new Consulta();
                    $Consulta->setId($dataSetConsulta['idConsulta']);
                    $Consulta->setData($dataSetConsulta['dataConsulta']);
                    $Consulta->setTurno($dataSetConsulta['turno']);
                    $Consulta->getPaciente()->setNome($dataSetConsulta['nomePaciente']);
                    $Consulta->getMedico()->setNome($dataSetConsulta['nomeMedico']);

                    $listaConsultas[] = $Consulta;
                }

                return $listaConsultas;
            }

        return false;
    }

    public  function atualizar(Consulta $consulta)
    {
        try {

            $id             = $consulta->getId();
            $data      = $consulta->getData();
            $turno     = $consulta->getTurno();
            $medico     = $consulta->getMedico()->getId();
            $paciente     = $consulta->getPaciente()->getId();
            

            return $this->update(
                'consulta',
                "data = :data, turno= :turno, idMedico = :idMedico,idPaciente = :idPaciente",
                [
                    ':id'=>$id,
                    ':data'=>$data,
                    ':turno'=>$turno,
                    ':idMedico'=>$medico,
                    ':idPaciente'=>$paciente
                    
                ],
                "id = :id"
            );

        } catch (\Exception $e) {
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Consulta $consulta)
    {
        try {
            $id = $consulta->getId();

            return $this->delete('consulta',"id = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao excluir", 500);
        }
    }

    public  function getById($id)
    {
        $resultado = $this->select(
            "SELECT id, data,turno,idMedico,idPaciente FROM consulta WHERE id = $id"
        );

        return $resultado->fetchObject(Consulta::class);

    }

    
}

?>