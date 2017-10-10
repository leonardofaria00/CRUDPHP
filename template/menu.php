<div class="main-container ace-save-state" id="main-container">
    <div class="container">
        <div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
            <div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
                <div class="navbar-container ace-save-state" id="navbar-container">
                    <div class="navbar-header pull-left">
                        <a href="#" class="navbar-brand">
                            <small>
                                <h3>
                                    <i class="fa fa-leaf"></i>
                                    Sistema de Gerenciamento de Dados
                                    <h3>
                                        </small>
                                        </a>             
                                        </div>

                                        </div><!-- /.navbar-container -->
                                        </div><!--navbar default-->

                                        <ul class="nav nav-list">

                                            <!--Botão Home-->
                                            <li class="hover">
                                                <a href="../pagAdmin/home.php">
                                                    <i class="menu-icon fa fa-home"></i>
                                                    <span class="menu-text">Início</span>
                                                    <b class="arrow fa fa-angle-down"></b>
                                                </a>                        
                                            </li>

                                            <!--Botão cadastro-->
                                            <li class="open hover">
                                                <a href="#" class="dropdown-toggle">
                                                    <i class="menu-icon fa fa-desktop"></i>
                                                    <span class="menu-text">Cadastro</span>
                                                    <b class="arrow fa fa-angle-down"></b>
                                                </a>
                                                <b class="arrow"></b>
                                                <ul class="submenu">							
                                                    <li class="hover">
                                                        <a href="../pagAdmin/formCadastro.php">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            Cadastrar Militar
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li> 
                                                    <li class="hover">
                                                        <a href="../pagAdmin/cadastrarUsuario.php">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            Cadastrar acesso
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li> 
                                                </ul> 
                                            </li><!--Fim Botão-->

                                            <!--Botão Consulta-->
                                            <li class="open hover">
                                                <a href="#" class="dropdown-toggle">
                                                    <i class="menu-icon fa fa-search"></i>
                                                    <span class="menu-text">
                                                        Consulta
                                                    </span>
                                                    <b class="arrow fa fa-angle-down"></b>
                                                </a>
                                                <b class="arrow"></b>
                                                <ul class="submenu">							
                                                    <li class="hover">
                                                        <a href="../pagAdmin/consultaUsuarios.php">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            Consultar Usuário
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li> 
                                                </ul> 
                                            </li><!--Fim Botão--> 

                                            <!--Botão Relatorio-->
                                            <li class="open hover">
                                                <a href="#" class="dropdown-toggle">
                                                    <i class="menu-icon fa fa-list-alt"></i>
                                                    <span class="menu-text">
                                                        Relatório
                                                    </span>
                                                    <b class="arrow fa fa-angle-down"></b>
                                                </a>
                                                <b class="arrow"></b>
                                                <ul class="submenu">							
                                                    <li class="hover">
                                                        <a href="../pagAdmin/relatorioUsuarios.php">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            Gerar relatório
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li> 
                                                </ul> 
                                            </li><!--Fim Botão-->                 

                                            <!--Botão Sair-->
                                            <li class="hover">
                                                <a href="../sair.php?action=logout">
                                                    <i class="menu-icon fa fa-exchange"></i>
                                                    <span class="menu-text">Sair</span>
                                                </a>                        
                                            </li>
<!--                                            <div class="">
                                                <?php
                                                $perfil = $_SESSION['dt_perfil'];
                                                if ($perfil == 1) {
                                                    ?>
                                                    <h6 class="align-right">Usuário: Administrador</h6>
                                                <?php } ?>
                                                <?php
                                                $perfil = $_SESSION['dt_perfil'];
                                                if ($perfil == 2) {
                                                    ?>
                                                    <h6 class="align-right">Usuário: Funcionário</h6>
                                                <?php } ?>


                                            </div>-->
                                        </ul><!-- /.nav-list -->
                                        </div><!--Sidebar-->
                                        <div class="hr hr-18 dotted hr-double"></div>
                                        </div><!--container-->
                                        </div><!-- /.main-content -->