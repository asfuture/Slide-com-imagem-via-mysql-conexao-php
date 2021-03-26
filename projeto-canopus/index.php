<?php
   session_start();
   session_destroy();
   unset($_SESSION['usuario_autenticado']);
   $_SESSION['usuario_autenticado'] = null;
   session_commit();
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
    <div>
        <!--Botão do login do ADM-->
        <button onclick="administrador(1)">Administrador</button>
        <!--Botão do login do usuario -->
         <button onclick="usuario(2)" >Usuário comum</button></a> 
    </div>
<!--Form do login adm -->
    <form id="login-adm" method="POST" action="autenticarlogin_adm.php" >
        <label for="nome">Login Administrador :</label><Input type="text" name="loginadm"></Input>
        <label for="">Senha :</label><Input type="text" name="loginsenha"></Input>
        <input type="submit" value="Enviar">
        <label onclick="sair()">sair</label>
    </form>
   <!--Form do login usuário -->
    <form id="login-usuario" method="POST" action="autenticarusuario.php"  >
        <label for="nome">Login Usuário :</label><Input type="text" name="loginUsuario"></Input>
        <label for="">Senha :</label><Input type="text" id="usuarioSenha" name="loginsenha"></Input>
        <input type="submit" value="Enviar">
        <label onclick="sair()">sair</label>
    </form>
</body>
<script type="text/javascript" charset="utf-8" src="script.js" defer></script>
</html>