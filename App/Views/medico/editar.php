<div class="row col-md-12">
  <?php if($Sessao::retornaMensagem()){ ?>
                <div class="col-md-12"><span class="label label-danger"><?php echo $Sessao::retornaMensagem(); ?></span></div>
            <?php } ?>

        <div class = "panel panel-info col-md-12">
     <div class = "panel-heading">
        <h3 class = "panel-title text-center">Editar Medico</h3>
     </div>
   
     <div class = "panel-body">

            <form action="http://<?php echo APP_HOST; ?>/medico/atualizar" method="post" id="form_cadastro">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['medico']->getId(); ?>">

                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text"  class="form-control" name="nome" id="nome" placeholder="" value="<?php echo $viewVar['medico']->getNome(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="especialidade">Especialidade</label>
                    <input type="text"  class="form-control" name="especialidade" id="especialidade" placeholder="" value="<?php echo $viewVar['medico']->getEspecialidade(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="crm">CRM</label>
                    <input type="text"  class="form-control" name="crm" id="crm" placeholder="" value="<?php echo $viewVar['medico']->getCrm(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="text"  class="form-control" name="cpf" id="cpf" placeholder="" value="<?php echo $viewVar['medico']->getCpf(); ?>" required>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text"  class="form-control" name="telefone" id="telefone" placeholder="" value="<?php echo $viewVar['medico']->getTelefone(); ?>" required>
                </div>


                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    <a href="http://<?php echo APP_HOST; ?>/paciente" class="btn btn-info btn-sm">Voltar</a>
                </div>
            </form>
        </div>
  </div>
 
