<div class="row col-md-12">
<div class = "panel panel-info col-md-12">
     <div class = "panel-heading">
        <h3 class = "panel-title text-center">Novo Paciente</h3>
     </div>
   
     <div class = "panel-body">
      <form action="http://<?php echo APP_HOST; ?>/paciente/salvar" method="post" id="form_cadastro">
    
      <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input maxlength="11" type="text" class="form-control" name="cpf" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('cpf'); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" name="rg" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('rg'); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('telefone'); ?>" required>
                </div>
      <div class="form-group col-md-12">
        <input type="submit" class="btn  btn-success" value="Cadastrar">
        <a href="http://<?php echo APP_HOST; ?>/paciente" class="btn btn-info btn-sm">Voltar</a>
      </div>
    </form>
    </div>
  </div>