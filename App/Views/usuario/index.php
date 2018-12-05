
        
        <div class="row col-md-12">
            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="col-md-12" >
                    <span class="label label-success">
                    <?php echo $Sessao::retornaMensagem(); ?>
                    </span>
                </div>
            <?php } ?>

            <?php
                if(!count($viewVar['listaUsuarios'])){
            ?>
                <div class="alert alert-info" role="alert">Nenhum paciente encontrado</div>
            <?php
                } else {
            ?>

              <div class = "panel panel-info col-md-12">
               <div class = "panel-heading">
                  <h3 class = "panel-title text-center">Usuários</h3>
               </div>
               <div class = "panel-body">
                <div class="table">
                    <table class="table table-hover">
                        <tr>
                            <th >Id</th>
                            <th >Nome</th>
                            <th >Email</th>
                            <th >Senha</th>
                            
                        </tr>
                        <?php
                            foreach($viewVar['listaUsuarios'] as $usuario) {
                        ?>
                            <tr>
                                <td><?php echo $usuario->getId(); ?></td>
                                <td><?php echo $usuario->getNome(); ?></td>
                                <td><?php echo $usuario->getEmail(); ?></td>
                                <td><?php echo $usuario->getSenha(); ?></td>
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/usuario/edicao/<?php echo $usuario->getId(); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="http://<?php echo APP_HOST; ?>/usuario/exclusao/<?php echo $usuario->getId(); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
    