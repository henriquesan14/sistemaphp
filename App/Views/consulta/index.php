
    
    <div class="row col-md-12">
        <?php if($Sessao::retornaMensagem()){ ?>
            <div class="col-md-12">
                <span class="label label-success">
                <?php echo $Sessao::retornaMensagem(); ?>
                </span>
            </div>
        <?php } ?>

        <?php
            if(!count($viewVar['listaConsultas'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhuma consulta encontrada</div>
        <?php
            } else {
        ?>
            
            <div class = "panel panel-info col-md-12">
               <div class = "panel-heading">
                  <h3 class = "panel-title text-center">Consultas</h3>
               </div>
               <div class = "panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th >Id</th>
                            <th >Data da Consulta</th>
                            <th >Turno</th>
                            <th >Paciente</th>
                            <th >Médico</th>
                        </tr>
                    </thead>
                    <?php
                        foreach($viewVar['listaConsultas'] as $consulta) {
                    ?>
                        <tr>
                            <td><?php echo $consulta->getId(); ?></td>
                            <td><?php echo date('d/m/Y', strtotime($consulta->getData())); ?></td>
                            <td><?php echo $consulta->getTurno(); ?></td>
                            <td><?php echo $consulta->getPaciente()->getNome(); ?></td>
                            <td><?php echo $consulta->getMedico()->getNome(); ?></td>

                            <td>
                                <a href="http://<?php echo APP_HOST; ?>/consulta/edicao/<?php echo $consulta->getId(); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <a href="http://<?php echo APP_HOST; ?>/consulta/exclusao/<?php echo $consulta->getId(); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        <?php
            }
        ?>
    </div>
</div>
</div>
