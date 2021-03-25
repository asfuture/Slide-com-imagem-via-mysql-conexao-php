<?php 
   session_start();
   session_destroy();
   unset($_SESSION['usuario_autenticado']);
   session_commit();
   
	// Capiturar os dados do BD e enviar para o formulário editar
	include("conecta.php");

	$ra = $_GET['id'];
	$resultado_dados = " SELECT * FROM tb_fotos WHERE  id= $ra";
	$resultado_bd = mysqli_query($con, $resultado_dados);
	$row_dados = mysqli_fetch_assoc($resultado_bd);
 ?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alterar cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
</head>
<body>
<form id="admCadastro" action="atualizar.php" method="POST"enctype="multipart/form-data">
    <h3>Editar Cadastro de Fotos</h3>
   
    <div>
		<img src="imgs/<?php echo $row_dados['foto'];?>">
	<div></br></br>
    
    <label for="">Foto</label> <input type="file" name="Nfoto">
    </br></br></br>

<label for="">ID:</label> <input type="number" name="ra" value="<?php echo $row_dados['id'];?>">

    <label for="">Titulo</label> <input type="text" name="titulo" value="<?php echo $row_dados['titulo']; ?>">

    <label for="">descrição</label> <input type="text" name="descricao" value="<?php echo $row_dados['descricao']; ?>">

    <input type="submit" value="Alterar"> 

    <a href="http://localhost/projeto-canopus/lista.php" > <label for="">Volta</label></a>
</form>

</body>
</html>