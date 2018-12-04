<div class="container">
    <div class="row">
    <br>
    <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/consulta/cadastro" class="btn btn-success btn-sm">Adicionar</a>
        <hr>
    </div>
    <div class="col-md-12">
        <?php if($Sessao::retornaMensagem()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $Sessao::retornaMensagem(); ?>
            </div>
        <?php } ?>

        <?php
            if(!count($viewVar['listaConsultas'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhuma consulta encontrada</div>
        <?php
            } else {
        ?>
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="info">Id</td>
                        <td class="info">Data</td>
                        <td class="info">Turno</td>
                        <td class="info">Paciente</td>
                        <td class="info">Médico</td>
                    </tr>
                    <?php
                        foreach($viewVar['listaConsultas'] as $consulta) {
                    ?>
                        <tr>
                            <td><?php echo $consulta->getId(); ?></td>
                            <td><?php echo $consulta->getData(); ?></td>
                            <td><?php echo $consulta->getTurno(); ?></td>
                            <td><?php echo $consulta->getPaciente()->getNome(); ?></td>
                            <td><?php echo $consulta->getMedico()->getNome(); ?></td>

                            <td>
                                <a href="http://<?php echo APP_HOST; ?>/consulta/edicao/<?php echo $consulta->getId(); ?>" class="btn btn-info btn-sm">Editar</a>
                                <a href="http://<?php echo APP_HOST; ?>/consulta/exclusao/<?php echo $consulta->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
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