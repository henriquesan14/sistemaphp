<div class="container">
    <div class="row">
        <br>
        <div class="col-md-12">
            <a href="http://<?php echo APP_HOST; ?>/medico/cadastro" class="btn btn-success btn-sm">Adicionar</a>
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
                if(!count($viewVar['listaMedicos'])){
            ?>
                <div class="alert alert-info" role="alert">Nenhum médico encontrado</div>
            <?php
                } else {
            ?>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="info">Id</td>
                            <td class="info">Nome</td>
                            <td class="info">Especialidade</td>
                            <td class="info">CRM</td>
                            <td class="info">CPF</td>
                            <td class="info">Telefone</td>
                        </tr>
                        <?php
                            foreach($viewVar['listaMedicos'] as $medico) {
                        ?>
                            <tr>
                                <td><?php echo $medico->getId(); ?></td>
                                <td><?php echo $medico->getNome(); ?></td>
                                <td><?php echo $medico->getEspecialidade(); ?></td>
                                <td><?php echo $medico->getCrm(); ?></td>
                                <td><?php echo $medico->getCpf(); ?></td>
                                <td><?php echo $medico->getTelefone(); ?></td>
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/medico/edicao/<?php echo $medico->getId(); ?>" class="btn btn-info btn-sm">Editar</a>
                                    <a href="http://<?php echo APP_HOST; ?>/medico/exclusao/<?php echo $medico->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
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