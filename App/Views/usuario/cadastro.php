<div class="row col-md-12">
<div class = "panel panel-info col-md-12">
     <div class = "panel-heading">
        <h3 class = "panel-title text-center">Novo Usuário</h3>
     </div>
   
     <div class = "panel-body">
      <form action="http://<?php echo APP_HOST; ?>/usuario/salvar" method="post" id="form_cadastro">
    
      <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('email'); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('senha'); ?>" required>
                </div>

      <div class="form-group col-md-12">
        <input type="submit" class="btn  btn-success" value="Cadastrar">
        <a class="btn btn-default" href="#">Cancelar</a>
      </div>
    </form>
    </div>
  </div>