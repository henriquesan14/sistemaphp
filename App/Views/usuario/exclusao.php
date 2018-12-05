<div class="row col-md-12">
    <div class = "panel panel-info col-md-12">
     <div class = "panel-heading">
        <h3 class = "panel-title text-center">Apagar Usuário</h3>
     </div>
   
     <div class = "panel-body">
            

            <form action="http://<?php echo APP_HOST; ?>/usuario/excluir" method="post" id="form_cadastro">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['usuario']->getId(); ?>">

                <div class="panel panel-danger">
                    <div class="panel-body">
                        Deseja realmente excluir o usuario: <?php echo $viewVar['usuario']->getNome(); ?> ?
                    </div>
                    <div class="panel-footer"> 
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        <a href="http://<?php echo APP_HOST; ?>/usuario" class="btn btn-info btn-sm">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>
