function verificar(recid) {
	if (confirm("Tem certeza que deseja excluir permanentemente este cadastro?")) {
			window.location ="delete.php? idexc=" + recid;
			}
}
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
              
        window.addEventListener("load",start);
        