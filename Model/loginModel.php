<?php
/**
 * Description of usuarioModel
 *
 * @Leonardo Faria dos Santos 61 9 9353-2946
 */
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

    function cadastrarLoginModel() {
        try {

            $pdo = new Config();
            $insertLogin = $pdo->prepare("INSERT INTO tb_login (dt_login, dt_password, dt_perfil) VALUES (:dt_login, :dt_password, :dt_perfil)");
            $insertLogin->bindValue(":dt_login", $this->login);
            $insertLogin->bindValue(":dt_password", $this->password);
            $insertLogin->bindValue(":dt_perfil", $this->perfil);
            if ($insertLogin->execute()) {
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $exc) {
            echo 'Erro ao cadastrar Login, erro: ' . $exc->getMessage();
        }
    }//cadastrarLoginModel

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
