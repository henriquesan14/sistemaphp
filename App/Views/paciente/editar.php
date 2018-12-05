<div class="row col-md-12">
  <?php if($Sessao::retornaMensagem()){ ?>
                <div class="col-md-12"><span class="label label-danger"><?php echo $Sessao::retornaMensagem(); ?></span></div>
            <?php } ?>

        <div class = "panel panel-info col-md-12">
     <div class = "panel-heading">
        <h3 class = "panel-title text-center">Editar Paciente</h3>
     </div>
   
     <div class = "panel-body">

            <form action="http://<?php echo APP_HOST; ?>/paciente/atualizar" method="post" id="form_cadastro">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['paciente']->getId(); ?>">

                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text"  class="form-control" name="nome" id="nome" placeholder="" value="<?php echo $viewVar['paciente']->getNome(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="text"  class="form-control" name="cpf" id="cpf" placeholder="" value="<?php echo $viewVar['paciente']->getCpf(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="rg">RG</label>
                    <input type="text"  class="form-control" name="rg" id="rg" placeholder="" value="<?php echo $viewVar['paciente']->getRg(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text"  class="form-control" name="telefone" id="telefone" placeholder="" value="<?php echo $viewVar['paciente']->getTelefone(); ?>" required>
                </div>


                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    <a href="http://<?php echo APP_HOST; ?>/paciente" class="btn btn-info btn-sm">Voltar</a>
                </div>
            </form>
        </div>
  </div>
 
