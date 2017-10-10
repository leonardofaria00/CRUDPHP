<?php
session_start();
$idUser = $_SESSION['idUser'];
include_once '../Controller/usuarioControler.php';
//$selectUsuarioControler = new UsuarioControler();
$selectUserControl = new UsuarioControler();
?>
<html>
    <head>
        <link rel="shortcut icon" href="../images/gallery/icone.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Tela de altarar</title>

        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="../assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php include_once '../template/menu.php'; ?>


        <div class="container center">
            <!--<h1>Corpo do Formulario aqui</h1>-->
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                            <h1><i class="ace-icon fa fa-users bigger-110 hidden-480"></i> &nbsp;&nbsp;&nbsp;&nbsp;Atualização de Usuários no Sistema</h1>
                        </div><!-- /.page-header -->
                        <?php
                        if (isset($_GET['msg'])) {
                            $msg = $_GET['msg'];
                            if ($msg == 'success') {
                                echo "<center><div class='alert alert-success'>
                                                <button type='button' class='close' data-dismiss='alert'>X</button>
                                                <h4>Novo usuário administrador cadastrado com sucesso!</h4>
                                                </div></center>";
                            } else if ($msg == 'error') {
                                echo "<center><div class='alert alert-danger'>
                                                <button type='button' class='close' data-dismiss='alert'>?</button>
                                                <h4>Advert?ncia!</h4>
                                                Houve algum erro no cadastro,<br>
                                                refa?a a opera??o...
                                              </div></center>";
                            }
                        }
                        ?>
                        <?php
                        $resultUser = $selectUserControl->findUserByIdControl($idUser);
                        ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <form action="../Controller/usuarioControler.php?action=updateUserById" method="post" name="formUser">
                                    <input type="hidden" class="form-control" name="idUser" value="<?= $idUser ?>" required="true"/>
                                    <label><b>Nome Completo:</b></label>
                                    <input type="text" class="form-control" name="nomeUsuario" value="<?= $resultUser->dt_user ?>" required="true"/>
                                    <label><b>Telefone:</b></label>
                                    <input type="tel" class="form-control" name="telefone" value="<?= $resultUser->dt_telefone?>" required="true"/>
                                    <label><b>Perfil:</b></label>
                                    <input type="text" class="form-control" name="perfil" value="<?= $resultUser->dt_perfil ?>" required="true"/>
                                    </br>
                                    </br>
                                    <input type="submit" class="btn btn-primary" name="Salvar" value="Salvar"/>
                                    <a href="./consultaUsuarios.php" type="button" class="btn btn-danger" name="reset" value="Limpar">Voltar</a>
                                </form>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!--Container-->
        <?php include_once '../template/footer.html'; ?>
    </body>
</html>
