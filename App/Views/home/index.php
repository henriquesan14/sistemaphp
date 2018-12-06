<?php
session_start();
if(empty($_SESSION['usuario'])){
    
}
?>
<div class="col-sm-6">
                <div class = "panel panel-info ">
                    <div class = "panel-heading">
                        <h3 class = "panel-title text-center">Consultas Agendadas Hoje</h3>
                    </div>

                    <div class = "panel-body">
                        <div class="alert alert-success col-md-2 sm">
                            <b ><?php echo $viewVar['totalDia']?></b>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class = "panel panel-info">
                    <div class = "panel-heading ">
                        <h3 class = "panel-title text-center">Consultas Agendadas no Mês Atual</h3>
                    </div>

                    <div class = "panel-body">
                        <div class="alert alert-success col-md-2 sm">
                            <b ><?php echo $viewVar['totalMes']?></b>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class = "panel panel-info">
                    <div class = "panel-heading ">
                        <h3 class = "panel-title text-center">Consultas Realizadas no Mês Anterior</h3>
                    </div>

                    <div class = "panel-body">
                        <div class="alert alert-success col-md-2 sm">
                            <b ><?php echo $viewVar['totalMesAnterior']?></b>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class = "panel panel-info">
                    <div class = "panel-heading ">
                        <h3 class = "panel-title text-center">Consultas Agendadas Proximo Mês</h3>
                    </div>

                    <div class = "panel-body">
                        <div class="alert alert-success col-md-2 sm">
                            <b ><?php echo $viewVar['totalMesProximo']?></b>
                        </div>



                    </div>
                </div>
            </div>
        </div>