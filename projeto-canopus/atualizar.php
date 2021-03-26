<?php
include('conecta.php');
	//Recebendo dados do formulário editar
    $id = $_POST['ra'];
	$Titulo = $_POST['titulo'];
	$Descricao = $_POST['descricao'];

			//Receber a imagem
		if (isset($_FILES['Nfoto'])) {
			$extensao = strtolower(substr($_FILES['Nfoto']['name'],-4));
			echo "$extensao";
				if($extensao =='') {
				//Sem arquivo/foto
				}else{
				/*Buscar imagem do banco de dados*/
				$buscar_img = mysqli_query($con, " SELECT foto FROM tb_fotos WHERE id='$id' ");
				
				while ($dado_ = mysqli_fetch_array($buscar_img))
				 {		
					$img_slide= $dado_['foto'];			
			   }
			   //excluir foto do diretorio
			   unlink("imgs/".$img_slide);
	   
			   /*Criptografar o nome da imagem e identificar o extensão da imagem e enviar para o diretório*/
				$novo = md5(time()).$extensao;
				$diretorio = "imgs/";
			    move_uploaded_file($_FILES['Nfoto']['tmp_name'],$diretorio.$novo);

			   $atualizar = " UPDATE tb_fotos SET titulo = '$Titulo',descricao ='$Descricao', foto ='$novo', data = now() where id= '$id'";

				//Verificar se a imagem foi enviada com sucesso.
				if ($con -> query($atualizar) === TRUE) {
				   echo "Cadastro alterado com sucesso";
			   }else{
				   echo "Error".$atualizar."<br>".$con->error;
				   }
			   }
		   }
   		 //Retornando a pagina Lista
   		header('location:lista.php');
    	mysqli_close($con);
?>