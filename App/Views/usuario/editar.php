<div class="row col-md-12">
  <?php if($Sessao::retornaMensagem()){ ?>
                <div class="col-md-12"><span class="label label-danger"><?php echo $Sessao::retornaMensagem(); ?></span></div>
            <?php } ?>

        <div class = "panel panel-info col-md-12">
     <div class = "panel-heading">
        <h3 class = "panel-title text-center">Editar Usuário</h3>
     </div>
   
     <div class = "panel-body">

            <form action="http://<?php echo APP_HOST; ?>/usuario/atualizar" method="post" id="form_cadastro">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['usuario']->getId(); ?>">

                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text"  class="form-control" name="nome" id="nome" placeholder="" value="<?php echo $viewVar['usuario']->getNome(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text"  class="form-control" name="email" id="email" placeholder="" value="<?php echo $viewVar['usuario']->getEmail(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input type="password"  class="form-control" name="senha" id="senha" placeholder="" value="<?php echo $viewVar['usuario']->getSenha(); ?>" required>
                </div>


                <div class="form-group col-md-12"> 
                    <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    <a href="http://<?php echo APP_HOST; ?>/usuario" class="btn btn-info btn-sm">Voltar</a>
                </div>
            </form>
        </div>
  </div>
 
