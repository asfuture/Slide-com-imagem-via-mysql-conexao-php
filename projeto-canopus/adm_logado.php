<?php
    session_start();
    session_destroy();
    unset($_SESSION['usuario_autenticado']);
    
    session_commit();
   
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
    <div class="containerSlider">

        <?php
    
         include('conecta.php');
            $controle_ativo = 1;						
            $result_carousel = "SELECT * FROM tb_fotos ORDER BY id ASC";
            $resultado_carousel = mysqli_query($con, $result_carousel);
            while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){ 
                if($controle_ativo == 2){ ?>

                <div class="sliderdv">
                    <img  src="imgs/<?php echo $row_carousel['foto']; ?>" alt="<?php echo $row_carousel['titulo'];?>"></br>
                    <button>titulo</button>
                 </div>
                 //<?php
                    $controle_ativo = 1;

                }else{ ?>
                    <div class="sliderdv">
                    <img src="imgs/<?php echo $row_carousel['foto']; ?>" alt="<?php echo $row_carousel['titulo']; ?>">
                    <input type="text" readonly value="<?php echo $row_carousel['titulo']; ?>"></input>

                    <input type="text" readonly value="<?php echo $row_carousel['descricao']; ?>"></input>
                    
                <?php
                }
            }
        ?>					
    </div>

    <div class="next">
    <button>next</button><button>before</button>
            </br></br></br>
    </div>
    <div class="button">
<!--Botão do login do ADM-->
<button>Administrador</button>
    <a href="http://localhost/projeto-canopus/lista.php" target="_blank"> <button for="">Consulta fotos</button>
    </a>  
              <!--Botão do login do usuario -->
    <a href="http://localhost/projeto-canopus/index.php"> <button >Sair</button></a>
    </div>

<script type="text/javascript" charset="utf-8" src="script.js" defer></script>

</html>