<?php require_once "libs/config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <title>GAME</title>
     <script type="text/javascript">
         
   

    function mostraDialogo(mensagem, tipo, tempo){
    
    // se houver outro alert desse sendo exibido, cancela essa requisição
    if($("#message").is(":visible")){
        return false;
    }

    // se não setar o tempo, o padrão é 3 segundos
    if(!tempo){
        var tempo = 3000;
    }

    // se não setar o tipo, o padrão é alert-info
    if(!tipo){
        var tipo = "info";
    }

    // monta o css da mensagem para que fique flutuando na frente de todos elementos da página
    var cssMessage = "display: block; position: fixed; top: 0; left: 20%; right: 20%; width: 60%; padding-top: 0px; z-index: 2147483648; text-align:center; -webkit-opacity: 0.8;";
    var cssInner = "margin: 0 auto;  box-shadow: 1px 1px 5px black;";

    // monta o html da mensagem com Bootstrap
    var dialogo = "";
    dialogo += '<div id="message" style="'+cssMessage+'">';
    dialogo += '    <div class="alert alert-'+tipo+' alert-dismissable" style="'+cssInner+'">';
    dialogo += '    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
    dialogo +=          mensagem;
    dialogo += '    </div>';
    dialogo += '</div>';

    // adiciona ao body a mensagem com o efeito de fade
    $("body").append(dialogo);
    $("#message").hide();
    $("#message").fadeIn(200);

    // contador de tempo para a mensagem sumir
    setTimeout(function() {
        $('#message').fadeOut(300, function(){
            $(this).remove();
        });
    }, tempo); // milliseconds

}






    </script>
</head>
<body> 
    <!--COMEÇO MENU HAMBÚRGUER-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #000000"> <!-- MUDEI A COR DO MENU PARA PRETO: NÃO PRECISEI UTILIZAR O BG-DARK, ATRIBUI A COR DIRETO  -->
        <div class="col-sm-5">
            <a href="index.php">
                <img src="midia/seta_back.png" class="img-fluid">
            </a>
            
        </div>

        <div class="col-sm-7">
            <a class="navbar-brand" href="#"><img src="midia/logo_nasa.png" width="180" height="75"></a>
        </div>

        
        
        
    </nav>
    <!--FIM MENU HAMBÚRGUER-->

    
    <div class="row" id="div_back">

            <div class="col-sm-2 align-self-end mb-4" id="status_lateral">

                <p id="p_status">HP</p>
                <div class="progress mx-3">
                  <div id = "cor_hp" class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
                <p id="p_status">STAMINA</p>
                <div class="progress mx-3">
                  <div id = "cor_stamina" class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
                <p id="p_status">HAPPINESS</p>
                <div class="progress mx-3">
                  <div id = "cor_felicidade" class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>                        
            </div>
            
            

            <div class="col-sm-8" id="principal">
                <p id="p_status">First Weeks</p>
                
                <div style="height: 480px" class="col-sm-2 align-self-end mb-4"></div>
                

            </div>
            <div class="col-sm-2 align-self-end mb-4" id="status_lateral">
                <p id="p_status">HP DA NAVE</p>
                <div class="progress mx-3">
                  <div id = "cor_hp_nave" class="progress-bar " role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>

                <p id="p_status">FUEL</p>
                <div class="progress mx-3">
                  <div id = "cor_fuel" class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div> 

                <p id="p_status">DADOS</p>
                <div class="progress mx-3">
                  <div id = "cor_ship" class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>  
            </div>

    </div>
    
        
    <footer>
            <div class="footer" id="footer">
                    <div class="row">
                        <div class="col-sm-4">
                            <!--/LOGO DO FOOTER--> 
                            <img src="midia/logo_rodape.png">
                        </div>
                        <div class="col-sm-4">
                            <h3> Contact </h3>
                            <ul>
                                <li><a class="email"href="#">game_2098@hotmail.com</a></li>
                                <br/>
                                <li> <p> (75) 988383174 </p> </li>
                                <li> <p> CONTACT US</p> </li>
                            </ul>
                        </div>
                        <div class="col-sm-4 mt-5">
                            <ul>
                                <li> <h5> <a href="#"> HOME</a> <h5></li>
                                <li> <h5><a href="#"> ACCOUNT </a> <h5></li>
                                <li> <h5><a href="#"> CONTACT </a> <h5></li>
                                <li> <h5><a href="#"> EXIT </a> <h5></li>
                            </ul>
                        </div>
                       
                    <!--/.row--> 
            </div>
            <!--/.footer-->                   
            <div class=" footer-bottom">
                <div class="">
                    <p class="pull-left copyright"> Copyright ©. All right reserved The Good Boys </p>
               
                </div>
            </div>
            <!--/.footer-bottom--> 
            <script src="bootstrap-4.1.3-dist/js/jquery.js"></script>
            <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </footer>
    
</body>
</html>