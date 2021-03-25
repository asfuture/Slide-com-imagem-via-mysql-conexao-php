function verificar(recid) {
	if (confirm("Tem certeza que deseja excluir permanentemente este cadastro?")) {
			window.location ="delete.php? idexc=" + recid;
			}
}
      /*
        var imgs=[];
        var slider;
        var imgAtual;
        var maxImg;
        var tmp;
        var tempoTroca;
       
        
        function preCarregamento(){
            var s=1;
            for(var i=0; i <5; i++){
                imgs[i] = new Image();
                imgs[i].src="imgs/s"+s+".jpg";
                s++;
            }  
        }
        
        function carregarImg(img){
            slider.style.backgroundImage="url('"+imgs[img].src+"')";
        }

        function inicia(){
            preCarregamento();
            imgAtual=0;
            maxImg=imgs.length-1;
            slider=document.getElementById("divslider");
            carregarImg(imgAtual);
            tempoTroca=3000;
            tmp = setInterval(troca,tempoTroca);
            
        }
        // 
        function troca(){
            imgAtual++;
            if(imgAtual>maxImg){
                imgAtual=0;
            }
            //recebendo valor da variavel imgAtual para atribuir como paramentro par o switch
            valortitulo = imgAtual;
          
            //Aterando o titulo e descrição conforme o tempo da imagem.
            switch(valortitulo) {
              case 0:
                text = "Titulo 1 ";
                txtdescicao = "descrição do testo 1";
              break;
              case 1:
              text = "Titulo 2";
              txtdescicao = "descrição do testo 2";
              break;
              case 2:
              text = "Titulo 3";
              txtdescicao = "descrição do texto 3";
              break;
              case 3:
              text = "Titulo 4";
              txtdescicao = "descrição do texto 4";
              break;
              case 4:
              text = "Titulo 5";
              txtdescicao = "descrição do texto 5";
              break;
              default:
              text = "I have never heard of that fruit...";
            }
            document.getElementById("titulo").innerHTML = text;
            document.getElementById("descricao").innerHTML = txtdescicao;
        carregarImg(imgAtual);  

        }
        */
        function administrador(valor1) {
            if(valor1==1){
            document.getElementById('login-adm').style.display='block';
            document.getElementById('login-usuario').style.display='';
            }
        }

          function usuario(valor2) {
              
              if(valor2 == 2){
                document.getElementById('login-usuario').style.display='block';
                document.getElementById('login-adm').style.display='';
                  }
                }

                function sair(){
                    document.getElementById('login-adm').style.display='none';
                    document.getElementById('login-usuario').style.display='none';
                }
                //cadastrar fotos
                var senhadoadm =1 ;
                if(senhadoadm==1){
                document.getElementById('admCadastro').style.display='block';
                }
                /*
                //troca de imagens 
                var time = 2000;
                var currentImageIndex = 0;
                var images = document.querySelectorAll(".slider img");
                var  max = images.lenght;

                function nextImage(){

                  //images[currentImageIndex].classList.remove("selected");

                  //currentImageIndex++

                  //if(currentImageIndex>=max){
                  //  currentImageIndex = 0;
                 // }
                 //images[currentImageIndex].classList.add("selected");
                //}

               // function start(){
                // setInterval(()=>{
                //   nextImage()
                 })
                }*/
               


        window.addEventListener("load",start);
        