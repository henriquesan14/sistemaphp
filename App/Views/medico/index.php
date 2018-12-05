
        
        <div class="row col-md-12">
            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="col-md-12">
                    <span class="label label-success">
                    <?php echo $Sessao::retornaMensagem(); ?>
                    </span>
                </div>
            <?php } ?>

            <?php
                if(!count($viewVar['listaMedicos'])){
            ?>
                <div class="alert alert-info" role="alert">Nenhum médico encontrado</div>
            <?php
                } else {
            ?>

              <div class = "panel panel-info col-md-12">
               <div class = "panel-heading">
                  <h3 class = "panel-title text-center">Médicos</h3>
               </div>
               <div class = "panel-body">
                <div class="table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th >Id</th>
                                <th >Nome</th>
                                <th >CRM</th>
                                <th >CPF</th>
                                <th >Especialidade</th>
                                <th >Telefone</th>
                            </tr>
                        </thead>
                        <?php
                            foreach($viewVar['listaMedicos'] as $medico) {
                        ?>
                            <tr>
                                <td><?php echo $medico->getId(); ?></td>
                                <td><?php echo $medico->getNome(); ?></td>
                                <td><?php echo $medico->getCrm(); ?></td>
                                <td><?php echo $medico->getCpf(); ?></td>
                                <td><?php echo $medico->getEspecialidade(); ?></td>
                                <td><?php echo $medico->getTelefone(); ?></td>
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/medico/edicao/<?php echo $medico->getId(); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="http://<?php echo APP_HOST; ?>/medico/exclusao/<?php echo $medico->getId(); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
    