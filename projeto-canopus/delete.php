<?php 
	include ('conecta.php');
		//Recebendo id do javascript.js para delete
		$recebe_id = $_GET["idexc"];
		//Deletendo no BD
		mysqli_query($con, " DELETE from tb_fotos where id= $recebe_id ");

		//Retornado para pagina lista.
 		header("location:lista.php");
    ?>