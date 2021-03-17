<?php

include "connection.php";
include "Cat.php";

class Dao{

    private $conexao;

    public function __construct()
    {
        
        try {
            
            $this->conexao = new Connection("localhost","root","2002caio","casabd");
            $this->conexao->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
           
            echo "Problemas na conexão.<br/>$e->getMessage()";
        }
    }

    public function get_all()
    {
        $sql = "SELECT * FROM tbl_moveis";
        $stmt = $this->conexao->_conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    public function get_by_id($cod)
    {
        $sql = "SELECT * FROM tbl_moveis WHERE mov_cod = $cod";
        $stmt = $this->conexao->_conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchObject(__CLASS__);
        return $result;
    }
}