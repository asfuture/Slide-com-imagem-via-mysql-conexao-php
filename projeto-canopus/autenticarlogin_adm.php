<?php
	session_start();
	include ('conecta.php');
	$Email = $_POST['loginadm'];
	$Senha = $_POST['loginsenha'];
	//$password = md5($Senha);
	
	//Verificação do login do professor
	if (($Email == '')||($Senha == '') ) {
		header('location:index.php');
	}else{
		//Buscar dados no banco de dados
	$buscar = "SELECT * FROM tb_login1 WHERE email ='$Email'";
	
	$resultado = mysqli_query($con,$buscar);

	while ($dados = mysqli_fetch_array($resultado) ) {
			$matricula=$dados['id'];
			$email_adm=$dados['email'];
			$senha_adm=$dados['senha'];	
	}
	//verificação da senha e loga
	if ($Senha  === $senha_adm) {
		echo "<script> alert('Login Realizado com sucesso')</script>";
		$_SESSION['usuario_autenticado'] = 'SIM';
		$_SESSION['id'] = $matricula;
		$_SESSION['email'] = $email_adm;
		$_SESSION['senha'] = $senha_adm;
		header('location:adm_logado.php?'.$email_adm);
	}else{
		echo "<script> alert('Senha ou E-mail invalido')</script>";
		$_GET['erro'] = 'erro1';
		header('location:index.php?'.$_GET['erro']);
	}
}
 ?>