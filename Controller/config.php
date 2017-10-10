<?php
/**
 * Description of usuarioModel
 *
 * @Leonardo Faria dos Santos 61 9 9353-2946
 */
class Config extends PDO {

    private $dsn = 'mysql:dbname=projeto5sch;host=localhost';
    private $user = 'root';
    private $password = '';
    public $handle = null;

    function __construct() {
        try {
            if ($this->handle == null) {
                $dbh = parent::__construct($this->dsn, $this->user, $this->password);
                $this->handle = $dbh;
                return $this->handle;
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return false;
        }
    }

    function __destruct() {
        $this->handle = NULL;
    }

}
