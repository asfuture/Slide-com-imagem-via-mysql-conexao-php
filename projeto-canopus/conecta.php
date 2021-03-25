<?php
//Conexão do banco de dados com o cadastro-alunos.
	$Server = "localhost";
	$User = "root";
	$Password = "";
	$BD = "cadastro_adm";

	$con =  mysqli_connect($Server,$User,$Password,$BD);

	if ($con -> connect_error) {
		die("Conexão interrompida: ".$con -> connect_error);
	}
?>

