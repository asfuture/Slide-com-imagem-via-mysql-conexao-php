<?php
include('conecta.php');

	$Titulo = $_POST['Ntitulo'];
	$Decricao = $_POST['Ndescricao'];
    
		if(isset($_FILES['Nfoto'])) {
			$extensao = strtolower(substr($_FILES['Nfoto']['name'],-4));
			$novo = md5(time()).$extensao;
 			$diretorio = "imgs/";
			move_uploaded_file($_FILES['Nfoto']['tmp_name'], $diretorio.$novo);

			$incluir = "INSERT INTO tb_fotos (titulo, descricao, foto,data) VALUES('$Titulo','$Decricao','$novo',Now())";

			if ($con -> query($incluir) === TRUE) {
				echo "Aluno cadastrado com sucesso";
			}else{
				echo "Error".$incluir."<br>".$con->error;
			}
		}
	
		header('location:lista.php?');
		mysqli_close($con);
?>