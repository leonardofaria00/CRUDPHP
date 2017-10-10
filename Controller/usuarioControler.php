<?php

include_once '../Model/usuarioModel.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'insertAcesso') {
        $usuario = new UsuarioControler();
        $usuario->cadastrarLogin();
    }

    if ($action == 'insertUser') {
        $usuario = new UsuarioControler();
        $usuario->insertUserControl();
    }
    if ($action == 'findUserId') {
        $usuario = new UsuarioControler();
        $usuario->findUserById($_GET['idUser']);
    }
    if ($action == 'updateUserById') {
        $usuario = new UsuarioControler();
        $usuario->updateUserById();
    }
    if ($action == 'deleteUserById') {
        $usuario = new UsuarioControler();
        $usuario->deleteUserById($_GET['idUser']);
    }
}//ifisset

class UsuarioControler {

    function cadastrarLogin() {
        $nameLogin = $_POST['nameLogin'];
        $namePassword = $_POST['namePassword'];
        $perfil = $_POST['perfil'];
        $model = new UsuarioModel();
        $model->setDt_login($nameLogin);
        $model->setDt_password($namePassword);
        $model->setDt_perfil($perfil);
        if ($model->cadastrarLoginModel()) {
            header("Location: ../pagAdmin/cadastrarUsuario.php?msg=sucessAcesso");
        } else {
            header("Location: ../pagAdmin/cadastrarUsuario.php?msg=errorAcesso");
        }
    }//cadastrarLogin()

    function loginUserControl() {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $um = new UsuarioModel();
        $um->setDt_login($usuario);
        $um->setDt_password($senha);
        $rs = $um->loginUserModel();

        if ($rs == FALSE) {
            header("Location: ../login.php?msg=error");
        } else {
            session_start();
            $_SESSION['id_user'] = $rs->id_user;
            $_SESSION['dt_user'] = $rs->dt_user;
            $_SESSION['dt_password'] = $rs->dt_password;
            $_SESSION['dt_status'] = $rs->dt_status;
            $_SESSION['logado'] = TRUE;
            header("Location: ../pagAdmin/home.php");
        }
    }//loginUsuario

    function selectUserAllControl() {
        $usuario = new UsuarioModel();
        $rs = $usuario->selectUserAll();
        return $rs;
    }//selectUserAllControl

    function insertUserControl() {
        $usuario = new UsuarioModel();
        $usuario->setDt_user($_POST['nomeUsuario']);
        $usuario->setDt_telefone($_POST['telefone']);
        $usuario->setDt_perfil($_POST['perfil']);
        $usuario->setDt_status(1);
//        $usuario->setDt_date();
        if ($usuario->insertUserModel()) {
            header("Location: ../pagAdmin/consultaUsuarios.php?msg=sucessInsert");
        } else {
            header("Location: ../pagAdmin/consultaUsuarios.php?msg=errorInsert");
        }
    }//insertUserControl

    function findUserByIdControl($idUser) {
        $read = new UsuarioModel();
        $rs = $read->findUserById($idUser);
        return $rs;
    }//insertUserControl

    function findUserById($idUser) {
        session_start();
        $_SESSION['idUser'] = $idUser;
        header("Location: ../pagAdmin/editarUsuario.php");
    }//findUserId

    function updateUserById() {
        $usuario = new UsuarioModel();
        $usuario->setDt_user($_POST['nomeUsuario']);
        $usuario->setDt_telefone($_POST['telefone']);
        $usuario->setDt_perfil($_POST['perfil']);
        $usuario->setId_user($_POST['idUser']);
        if ($usuario->updateUserById()) {
            header("Location: ../pagAdmin/consultaUsuarios.php?msg=sucessAlteracao");
        } else {
            header("Location: ../pagAdmin/consultaUsuarios.php?msg=errorAlteracao");
        }
    }//updateUserIdtest

    function deleteUserById($idUser) {
        $usuario = new UsuarioModel();
//        $usuario->HidenUserById();
        if ($usuario->HidenUserById($idUser)) {
            header("Location: ../pagAdmin/consultaUsuarios.php?msg=sucessDelete");
        } else {
            header("Location: ../pagAdmin/consultaUsuarios.php?msg=errorDelete");
        }
    }//deleteUserById

    function buscaCep($cep) {
//        var_dump($cep);
        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";
        $xml = simplexml_load_file($url);
        return json_encode($xml);
    }//buscaCep
}//UsuarioController
