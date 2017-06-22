<?php 
	$host = "localhost";
	$banco = "cpresenca";
        $usuario = "root";
    $senha = "admin";

	try{
		$conexao = new PDO("mysql:host=$host;port=3306;dbname=$banco",$usuario,$senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conexão realizada com sucesso!";
	}

	catch(PDOException $e) {
	 	echo 'Error: ' . $e->getMessage();
	}