<div class="main">

        
        <div class="menu menu-open" >
            <ul>
              <li class="visible-xs"><a href="#"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
              <li><a href="?pg=analytics"><i class="fas fa-chart-bar"></i><span>Analytics</span></a>
              </li> <!--fim analytics-->

              <li class="abrir-menu"><a href="#"><i class="fas fa-user"></i><span>Pacientes</span></a>
                <ul class="hide-menu">
                  <li <?php if($viewVar['nameController'] == "PacienteController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/paciente/cadastro" ><i class="fas fa-plus-square"></i>Cadastro</a>
                  </li>
                  <li <?php if($viewVar['nameController'] == "PacienteController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/paciente/index" ><i class="fas fa-list-alt"></i>Listar</a>
                  </li>
                </ul> <!--fim submenu-->
              </li>

              <li class="abrir-menu"><a href="#"><i class="fas fa-user-md"></i><span>Médicos</span></a>
                <ul class="hide-menu">
                  <li <?php if($viewVar['nameController'] == "MedicoController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/medico/cadastro" ><i class="fas fa-plus-square"></i>Cadastro</a>
                  </li>
                  <li <?php if($viewVar['nameController'] == "MedicoController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/medico/index" ><i class="fas fa-list-alt"></i>Listar</a>
                  </li>
                </ul><!--fim submenu-->
              </li>

              <li class="abrir-menu"><a href="#"><i class="fas fa-calendar-alt"></i><span>Consultas</span></a>
                <ul class="hide-menu">
                  <li <?php if($viewVar['nameController'] == "ConsultaController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/consulta/cadastro" ><i class="fas fa-plus-square"></i>Cadastro</a>
                  </li>
                  <li <?php if($viewVar['nameController'] == "ConsultaController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/consulta/index" ><i class="fas fa-list-alt"></i>Listar</a>
                  </li>
                </ul> <!--fim fim submenu-->
              </li>

            </ul> <!-- fim menu principal-->
        </div> <!--fim aside-->
    
        <div class="content">