<div class="row col-md-12">  
  <div class = "panel panel-info col-md-12">
       <div class = "panel-heading">
          <h3 class = "panel-title text-center">Nova Consulta </h3>
       </div>
     
       <div class = "panel-body">
        <form action="http://<?php echo APP_HOST; ?>/consulta/salvar" method="post" id="form_cadastro">
      
         <div class="form-group col-md-6">
                    <label for="data">Data</label>
                    <input type="date" class="form-control"  name="data" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('data'); ?>" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="turno">Turno</label>
                    <select class="form-control" name="turno" value="<?php echo $Sessao::retornaValorFormulario('turno'); ?>" required>
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Médico</label>
                    <select class="form-control" name="medico"  required>

                        <?php foreach($viewVar['listaMedicos'] as $Medico): ?>
                        <option value="<?php echo $Medico->getId(); ?>" <?php echo ($Sessao::retornaValorFormulario('medico') == $Medico->getId())? "selected" : ""; ?>><?php echo $Medico->getNome(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Paciente</label>
                    <select class="form-control" name="paciente"  required>

                        <?php foreach($viewVar['listaPacientes'] as $Paciente): ?>
                        <option value="<?php echo $Paciente->getId(); ?>" <?php echo ($Sessao::retornaValorFormulario('paciente') == $Paciente->getId())? "selected" : ""; ?>><?php echo $Paciente->getNome(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


        <div class="form-group col-md-12">
          <input type="submit" class="btn btn-success" value="Cadastrar">
          <a class="btn btn-default" href="?pg=analytics">Cancelar</a>
        </div>
      </form>
      </div>
    </div>