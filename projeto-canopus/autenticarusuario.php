<?php
	session_start();
	include ('conecta.php');
	$Email_usuario = $_POST['loginUsuario'];
	$Senha_usuario = $_POST['loginsenha'];
	//$password = md5($Senha);
	
	//Verificação do login do professor
	if (($Email_usuario == '')||($Senha_usuario == '') ) {
		header('location:index.php');
	}else{
		//Buscar dados no banco de dados
	$buscar = "SELECT * FROM tb_login WHERE email ='$Email_usuario'";
	
	$resultado = mysqli_query($con,$buscar);

	while ($dados = mysqli_fetch_array($resultado) ) {
			$matricula=$dados['id'];
			$email_usu=$dados['email'];
			$senha=$dados['senha'];	
	}
	//verificação da senha e loga
	if ($Senha_usuario  === $senha) {
		echo "<script> alert('Login Realizado com sucesso')</script>";
		$_SESSION['usuario_autenticado'] = 'SIM';
		$_SESSION['id'] = $matricula;
		$_SESSION['email'] = $email_usu;
		$_SESSION['senha'] = $senha_usu;
		header('location:usuario1_logado.php?'.$email_usu);
	}else{
		echo "<script> alert('Senha ou E-mail invalido')</script>";
		$_GET['erro'] = 'erro1';
	//	header('location:index.php?'.$_GET['erro']);
	}
}
 ?>