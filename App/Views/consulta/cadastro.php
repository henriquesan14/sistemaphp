<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Consultas</h3>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/consulta/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="date" class="form-control"  name="data" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('data'); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="turno">Turno</label>
                    <select class="form-control" name="turno" value="<?php echo $Sessao::retornaValorFormulario('turno'); ?>" required>
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                    </select>
                </div>

                <div>
                    <label>Médico</label>
                    <select class="form-control" name="medico"  required>

                        <?php foreach($viewVar['listaMedicos'] as $Medico): ?>
                        <option value="<?php echo $Medico->getId(); ?>" <?php echo ($Sessao::retornaValorFormulario('medico') == $Medico->getId())? "selected" : ""; ?>><?php echo $Medico->getNome(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Paciente</label>
                    <select class="form-control" name="paciente"  required>

                        <?php foreach($viewVar['listaPacientes'] as $Paciente): ?>
                        <option value="<?php echo $Paciente->getId(); ?>" <?php echo ($Sessao::retornaValorFormulario('paciente') == $Paciente->getId())? "selected" : ""; ?>><?php echo $Paciente->getNome(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


                
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>