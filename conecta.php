<?php

    try{
        $pdo = new PDO("mysql:dbname=escolaana;host=localhost;charset=utf8","root","");
    }
    catch(PDOException $erro)
    {
        echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
    }
?>