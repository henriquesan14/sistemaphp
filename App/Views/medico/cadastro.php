<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Médicos</h3>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/medico/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="especialidade">Especialidade</label>
                    <input type="text" class="form-control" name="especialidade" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('especialidade'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="crm">CRM</label>
                    <input type="text" class="form-control" name="crm" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('crm'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('cpf'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('telefone'); ?>" required>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>