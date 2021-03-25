<?php 
    session_start();
   if (!isset($_SESSION['usuario_autenticado']) or $_SESSION['usuario_autenticado'] != 'SIM') {
    header('location:edita.php');
   }

	// Capiturar os dados do BD e enviar para o formulário editar
	include("conecta.php");

	$ra = $_SESSION['id'];
	$resultado_dados = " SELECT * FROM tb_fotos WHERE  id= $ra";
	$resultado_bd = mysqli_query($con, $resultado_dados);
	$row_dados = mysqli_fetch_assoc($resultado_bd);
    
 ?>
 <html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>Projeto Canopus</title>
</head>
<body>
    <div id="divslider">
       <h1 id="titulo">Titulo 1</h1>
       <p id="descricao">descrição texto 1</p>
    </div>

    <div>
        <!--Botão do login do Usuario-->
        <button>Usuário comum</button>
        <!--Botão sair -->
          <a href="http://localhost/projeto-canopus/index.php"><button >Sair</button></a> 
    </div>

    <form id="admCadastro">
        
    </form>


</body>
<script type="text/javascript" charset="utf-8" src="script.js" defer></script>
</html>