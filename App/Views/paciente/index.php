<div class="container">
    <div class="row">
        <br>
        <div class="col-md-12">
            <a href="http://<?php echo APP_HOST; ?>/paciente/cadastro" class="btn btn-success btn-sm">Adicionar</a>
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
                if(!count($viewVar['listaPacientes'])){
            ?>
                <div class="alert alert-info" role="alert">Nenhum paciente encontrado</div>
            <?php
                } else {
            ?>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="info">Id</td>
                            <td class="info">Nome</td>
                            <td class="info">CPF</td>
                            <td class="info">RG</td>
                            <td class="info">Telefone</td>
                        </tr>
                        <?php
                            foreach($viewVar['listaPacientes'] as $paciente) {
                        ?>
                            <tr>
                                <td><?php echo $paciente->getId(); ?></td>
                                <td><?php echo $paciente->getNome(); ?></td>
                                <td><?php echo $paciente->getCpf(); ?></td>
                                <td><?php echo $paciente->getRg(); ?></td>
                                <td><?php echo $paciente->getTelefone(); ?></td>
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/paciente/edicao/<?php echo $paciente->getId(); ?>" class="btn btn-info btn-sm">Editar</a>
                                    <a href="http://<?php echo APP_HOST; ?>/paciente/exclusao/<?php echo $paciente->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
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