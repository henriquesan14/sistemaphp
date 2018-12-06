<div class="row col-md-12">
  <?php if($Sessao::retornaMensagem()){ ?>
                <div class="col-md-12"><span class="label label-danger"><?php echo $Sessao::retornaMensagem(); ?></span></div>
            <?php } ?>

        <div class = "panel panel-info col-md-12">
     <div class = "panel-heading">
        <h3 class = "panel-title text-center">Editar Consulta</h3>
     </div>
   
     <div class = "panel-body">

            <form action="http://<?php echo APP_HOST; ?>/consulta/atualizar" method="post" id="form_cadastro">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['consulta']->getId(); ?>">

                <div class="form-group col-md-6">
                    <label for="data">Data</label>
                    <input type="date"  class="form-control" name="data" id="data" placeholder="" value="<?php echo $viewVar['consulta']->getData(); ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="turno">Turno</label>
                    <select class="form-control" name="turno"  required>
                        <?php foreach($viewVar['listaTurnos'] as $turno): ?>
                            <option value="<?php echo $turno; ?>" <?php echo ( $viewVar['consulta']->getTurno() == $turno)? "selected" : ""; ?>><?php echo $turno; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                

                <div class="form-group col-md-6">
                    <label for="medico">Medico</label>
                    <select class="form-control" name="medico"  required>
                        <?php foreach($viewVar['listaMedicos'] as $Medico): ?>
                            <option value="<?php echo $Medico->getId(); ?>" <?php echo ( $viewVar['consulta']->getMedico()->getId() == $Medico->getId())? "selected" : ""; ?>><?php echo $Medico->getNome(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="descricao">Paciente</label>
                    <select class="form-control" name="paciente"  required>
                        <?php foreach($viewVar['listaPacientes'] as $Paciente): ?>
                            <option value="<?php echo $Paciente->getId(); ?>" <?php echo ( $viewVar['consulta']->getPaciente()->getId() == $Paciente->getId())? "selected" : ""; ?>><?php echo $Paciente->getNome(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

               
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    <a href="http://<?php echo APP_HOST; ?>/consulta" class="btn btn-info btn-sm">Voltar</a>
                </div>
            </form>
        </div>
  </div>
 
