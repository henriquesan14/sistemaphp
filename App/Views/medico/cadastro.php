<div class="row col-md-12">  
  <div class = "panel panel-info col-md-12">
       <div class = "panel-heading">
          <h3 class = "panel-title text-center">Novo Médico</h3>
       </div>
     
       <div class = "panel-body">
        <form action="http://<?php echo APP_HOST; ?>/medico/salvar" method="post" id="form_cadastro">
      
        <div class="form-group col-md-6">
          <label for="nome">Nome</label>
          <input class="form-control" type="text" name="nome" id="nome">
        </div>
        <div class="form-group col-md-6">
          <label for="crm">CRM</label>
          <input class="form-control" type="text" name="crm" id="crm">
        </div>
        <div class="form-group col-md-6">
          <label for="cpf">CPF</label>
          <input class="form-control" type="text" name="cpf" id="cpf">
        </div>
        <div class="form-group col-md-6">
          <label for="espec">Especialidade</label>
          <input class="form-control" type="text" name="especialidade" id="espec">
        </div>
        <div class="form-group col-md-6">
          <label for="tel">Telefone</label>
          <input class="form-control" type="tel" name="telefone" id="tel">
        </div>
        <div class="form-group col-md-12">
          <input type="submit" class="btn btn-success" value="Cadastrar">
          <a class="btn btn-default" href="?pg=analytics">Cancelar</a>
        </div>
      </form>
      </div>
    </div>