<?php
    session_start();
    session_destroy();
    unset($_SESSION['usuario_autenticado']);
    
    session_commit();
    include('conecta.php');
?>
<!DOCTYPE html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Projeto Canopus</title>
</head>
<body>
<h1 class="title">Slider Canopus</h1>
    <div class="slider" >
                <ul>
					<?php
						$controle_ativo = 2;						
						$result_carousel = "SELECT * FROM tb_fotos ORDER BY id ASC";
						$resultado_carousel = mysqli_query($con, $result_carousel);
						while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){ 
							if($controle_ativo == 2){ ?>
								<li class="item active">
									<img src="imgs/<?php echo $row_carousel['foto']; ?>" alt="<?php echo $row_carousel['titulo']; ?>">
									<label> Titulo</label>
									<input type="text" value="<?php echo $row_carousel['titulo']; ?>"readonly></input></br>
									<label> Descrição</label>
									<input type="text" value="<?php echo $row_carousel['descricao']; ?>" readonly></input>
								</li><?php
								$controle_ativo = 1;
							}else{ ?>
								<li class="item">
									<img src="imgs/<?php echo $row_carousel['foto']; ?>" alt="<?php echo $row_carousel['titulo']; ?>">
									<label> Titulo</label>
                                    <input type="text" value="<?php echo $row_carousel['titulo']; ?>" readonly></input></br>
									<label> Descrição</label>
									<input type="text" value="<?php echo $row_carousel['descricao']; ?>"readonly></input>
							</li>
                           <?php
							}
						}
					?>					
				</ul>
					</br></br>
				<div class="divbutton">
            <!--Botão do login do ADM-->
            <button>Administrador</button>
              <a href="http://localhost/projeto-canopus/lista.php"><button for="">Consulta fotos</button>
              </a>          <!--Botão do login do usuario -->
            <a href="http://localhost/projeto-canopus/index.php"><button>Sair</button></a>
    		</div>  
      </div>
	<script type="text/javascript" charset="utf-8" src="script.js" defer></script>	  
<body>
</html>