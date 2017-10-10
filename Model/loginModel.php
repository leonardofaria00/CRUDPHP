<?php

include_once '../Controller/config.php';

class LoginModel {

    private $login;
    private $password;
    private $perfil;

    function loginUserModel() {
        try {
            $pdo = new Config();
            $select = $pdo->prepare("SELECT * FROM tb_login WHERE dt_login = :dt_login AND dt_password = :dt_password");
            $select->bindValue(":dt_login", $this->getLogin());
            $select->bindValue(":dt_password", $this->getPassword());
            $select->execute();
            return $select->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo 'Erro ao logar no sistema no sistema:::::: ' . $ex->getMessage();
        }
    }//loginUserModel

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

}//validaLoginModel
