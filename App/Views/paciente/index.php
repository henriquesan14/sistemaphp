
        
        <div class="row col-md-12">
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

              <div class = "panel panel-info col-md-12">
               <div class = "panel-heading">
                  <h3 class = "panel-title text-center">Pacientes</h3>
               </div>
               <div class = "panel-body">
                <div class="table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th >Id</th>
                                <th >Nome</th>
                                <th >CPF</th>
                                <th >RG</th>
                                <th >Telefone</th>
                            </tr>
                        </thead>
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
                                    <a href="http://<?php echo APP_HOST; ?>/paciente/edicao/<?php echo $paciente->getId(); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="http://<?php echo APP_HOST; ?>/paciente/exclusao/<?php echo $paciente->getId(); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
              </div>
            </div>
            <?php
                }
            ?>
        </div>
    