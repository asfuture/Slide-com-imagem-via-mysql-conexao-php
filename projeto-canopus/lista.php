<?php 
session_start();
session_destroy();
unset($_SESSION['usuario_autenticado']);
session_commit();

	include('conecta.php');
	//Buscar os dados do BD e listar 
	$lista = mysqli_query($con," SELECT * FROM tb_fotos");
?>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
		<title>CONSULTA</title>
	</head>
    <body>
        <div class="titleformlist">
            <h3>Fotos Cadastradas</h3> <h3>Cadastar de Fotos</h3>
        </div>
        <div class="formLista">
<table>

    <tr>
    
        <td class="">ID</td>
        <td class="">Foto</td>
        <td class="">Titulo</td>
        <td class="">descrição</td>
        <td class="">
                <a href=http://localhost/projeto-canopus/adm_logado.php>Voltar</a>
            </td>
    </tr>
    <!--While para buscar todos dados do BD e exibir da tela--> 
    <?php while ($dado = mysqli_fetch_array($lista)) {?>
        <tr>
            <!--Cabeçalho da tabela-->
            <td><?=$dado['id'];?></td>
            <td><?=$dado['foto'];?></td>
            <td><?=$dado['titulo'];?></td>
            <td><?=$dado['descricao'];?></td>
        
            <!--Botões editar e excluir-->
            <td align="center" > <a href="edita.php?id=<?php echo $dado['id'];?> ">Editar</a></td>

            <td align="center"><a href="#" onclick="verificar(<?=$dado['id'];?>)">Excluir</a></td>
            </tr>
        <?php } ?>	
</table>
<form id="admCadastro" action="inseridados.php" method="POST" enctype="multipart/form-data">
        
        <label for="">ID:</label><input type="number" readonly></br></br>
        <label for="">Foto</label><input type="file" name="Nfoto"></br></br>
        <label for="">Titulo</label><input type="text" name="Ntitulo"></br></br>
        <label for="">descrição</label><input type="text" name="Ndescricao">
        <input type="submit" value="Enviar"><br><br>
    </form>
    </div>
</body>
<script type="text/javascript" charset="utf-8" src="script.js" defer></script>
</html>

					