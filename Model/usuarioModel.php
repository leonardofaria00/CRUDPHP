<?php

include_once '../Controller/config.php';

/**
 * Description of usuarioModel
 *
 * @Leonardo Faria dos Santos 61 9 9353-2946
 */
class UsuarioModel {

    private $id_user;
    private $dt_user;
    private $dt_perfil;
    private $dt_status;
    private $dt_date;
    private $dt_telefone;

    function insertUserModel() {
        try {
            $pdo = new Config();
            $insertUser = $pdo->prepare("INSERT INTO tb_user (dt_user, dt_telefone, dt_perfil, dt_status, dt_date)"
                    . " VALUES (:dt_user, :dt_telefone, :dt_perfil, :dt_status, :dt_date)");
            $insertUser->bindValue(":dt_user", $this->dt_user, PDO::PARAM_STR);
            $insertUser->bindValue(":dt_telefone", $this->dt_telefone, PDO::PARAM_STR);
            $insertUser->bindValue(":dt_perfil", $this->dt_perfil, PDO::PARAM_INT);
            $insertUser->bindValue(":dt_status", 1);
            $insertUser->bindValue(":dt_date", $this->dt_date);
            if ($insertUser->execute()) {
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $ex) {
            echo 'Erro ao inserir Usuário no sistema:::::: ' . $ex->getMessage();
        }
    }//insertUserModel
    
    function __construct() {//Manipulando a data e populando ela para ser capturada pela variável dt_date
        $this->dt_date = date("Y-m-d");
    }

    function selectUserAll() {
        try {
            $pdo = new Config();
            $user = $pdo->prepare("SELECT * FROM tb_user");
            $user->execute();
            return $user->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo 'Erro ao buscar Usuário no sistema:::::: ' . $ex->getMessage();
        }
    }//selectUserAll

    function updateUserById() {
        try {
            $pdo = new Config();
            $update = $pdo->prepare("UPDATE tb_user SET dt_user = :dt_user, dt_telefone = :dt_telefone, dt_perfil = :dt_perfil WHERE id_user = :id_user ");
            $update->bindValue(':dt_user', $this->dt_user);
            $update->bindValue(':dt_telefone', $this->dt_telefone);
            $update->bindValue(':dt_perfil', $this->dt_perfil);
            $update->bindValue(':id_user', $this->id_user);
            if ($update->execute()) {
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $ex) {
            echo 'Erro ao alterar Usuário no sistema:::::: ' . $ex->getMessage();
        }
    }//updateUserModel

    function HidenUserById($idUser) {
        try {
            $pdo = new Config();
            $update = $pdo->prepare("UPDATE tb_user SET dt_status = :dt_status WHERE id_user = :id_user ");
            $update->bindValue(':id_user', $idUser);
            $update->bindValue(':dt_status', 0);
            if ($update->execute()) {
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $ex) {
            echo 'Erro ao alterar Usuário no sistema:::::: ' . $ex->getMessage();
        }
    }//updateUserModel

    function deleteUserById($idUser) {
        try {
            $pdo = new Config();
            $delete = $pdo->prepare("DELETE FROM tb_user WHERE id_user = :id_user");
            $delete->bindValue(':id_user', $idUser);
            if ($delete->execute()) {
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $ex) {
            echo 'Erro ao deletar Usuário no sistema:::::: ' . $ex->getMessage();
        }
    }//deleteUserById

    function findUserById($id) {
        try {
            $pdo = new Config();
            $read = $pdo->prepare("SELECT * FROM tb_user WHERE id_user=$id");
            if ($read->execute()) {
                return $read->fetch(PDO::FETCH_OBJ);
            } else {
                return FALSE;
            }
        } catch (PDOException $ex) {
            echo 'Erro ao Buscar Usuário no sistema:::::: ' . $ex->getMessage();
        }
    }//findUserById

    function getId_user() {
        return $this->id_user;
    }

    function getDt_user() {
        return $this->dt_user;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setDt_user($dt_user) {
        $this->dt_user = $dt_user;
    }

    function getDt_perfil() {
        return $this->dt_perfil;
    }

    function getDt_status() {
        return $this->dt_status;
    }

    function setDt_perfil($dt_perfil) {
        $this->dt_perfil = $dt_perfil;
    }

    function setDt_status($dt_status) {
        $this->dt_status = $dt_status;
    }

    function getDt_date() {
        return $this->dt_date;
    }

    function setDt_date($dt_date) {
        $this->dt_date = $dt_date;
    }

    function getDt_telefone() {
        return $this->dt_telefone;
    }

    function setDt_telefone($dt_telefone) {
        $this->dt_telefone = $dt_telefone;
    }

}//Class
