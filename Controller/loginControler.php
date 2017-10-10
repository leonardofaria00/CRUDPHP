<?php

include_once '../Model/loginModel.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'logarSistema') {
        $usuarioControler = new classLoginControler();
        $usuarioControler->loginUserControl();
    }
}//isset

class classLoginControler {

    function loginUserControl() {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $um = new LoginModel();
        $um->setLogin($usuario);
        $um->setPassword($senha);
//        $um->setPerfil($perfil);
        $rs = $um->loginUserModel();

        if ($rs == FALSE) {
            header("Location: ../login.php?msg=error");
        } else {
            session_start();
            $_SESSION['id_login'] = $rs->id_login;
            $_SESSION['dt_login'] = $rs->dt_login;
            $_SESSION['dt_password'] = $rs->dt_password;
            $_SESSION['dt_perfil'] = $rs->dt_perfil;
            $_SESSION['logado'] = TRUE;
            header("Location: ../pagAdmin/home.php");
        }
    }//loginUsuario
}//validaLoginControler
