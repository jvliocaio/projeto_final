<?php

include "connection.php";
include "Type.php";

try {
    $conexao = new Connection("localhost", "root", "2002caio", "casabd");
    $conexao->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


       
    $acao = $_POST["acao"];

    if ($acao == "criar_categoria") {

        $type = set_tCat();

        $tCat = $type->get_tCat();

        $sql = "INSERT INTO tbl_categoria(
            cat_nome
            )
                VALUES(
            '$tCat'
            )";
        $conexao->_conn->exec($sql);

        end_process();
    }

 
} catch (PDOException $e) {
    echo "Problemas na inserção.<br>$sql<br>$e->getMessage()";
}

function set_tCat()
{
    $type = new Type($_POST["tCat"]);
    return $type;
}

function end_process()
{
    global $conexao;
    $conexao->close_connection();
    header("Location: ../interFun_cat.php");
    die();
}
