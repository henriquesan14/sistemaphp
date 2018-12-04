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
                    <input type="text" class="form-control" name="turno" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('turno'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="turno">Medico</label>
                    <input type="text" class="form-control" name="medico" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('medico'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="turno">Paciente</label>
                    <input type="text" class="form-control" name="paciente" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('paciente'); ?>" required>
                </div>

                

                


                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>