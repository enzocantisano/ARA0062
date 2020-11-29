<?php

class Bd {

    private $dsn, $user, $password, $conn;

    function __construct() {
        $this->dsn = 'mysql:dbname=ARA0062;host=localhost';
        $this->user = 'ARA0062';
        $this->password = 'ARA0062';

        // $this->dsn = 'mysql:dbname=id15514754_ara0062;host=localhost';
        // $this->user = 'id15514754_blogvet';
        // $this->password = 'qQBV!6SXi)jq!RlVq1hs';

        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    /**
    * Rodar uma consulta select
    **/
    function query($sql) {
        try {
            return $this->conn->query($sql);
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }


    }

    /**
    * Executar sql = insert, update, delete
    * */
    function exec($sql){
        try {
            return $this->conn->exec($sql);
        } catch (PDOException $e) {
            echo 'Exec failed: ' . $e->getMessage();
        }

    }
}


?>