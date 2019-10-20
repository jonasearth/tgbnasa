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


    <title>2098</title>
</head>
<body> 
    <!--COMEÇO MENU HAMBÚRGUER-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #000000"> <!-- MUDEI A COR DO MENU PARA PRETO: NÃO PRECISEI UTILIZAR O BG-DARK, ATRIBUI A COR DIRETO  -->
		<a class="navbar-brand" href="#"><img src="midia/logo_nasa.png" width="180" height="75"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">REGISTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
        </div><!--COLLAPSE-->
    </nav>
    <!--FIM MENU HAMBÚRGUER-->
    <div id = "div_back">
        <!-- Conteúdo -->
        <img src="midia/space_2.jpg" class="img-fluid">
    </div>
    
    <div class="jumbotron">
        <h1 class="display-3">THE FUTURE IS NOW</h1>
        <p class="lead">Join a unique story!</p>
        <a class="btn btn-dark btn-lg" href="register.html">Start Now</a>
    </div><!--JUMBOTRON-->


		    
   	<footer>
            <div class="footer" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <!--/LOGO DO FOOTER--> 
                            <img src="midia/logo_rodape.png" style="padding-top: 30px;">
                        </div>
                        <div class="col-lg-3 col-sm-2 col-xs-3">
                            <h3> Contact </h3>
                            <ul>
                                <li><a class="email"href="#">game_2098@hotmail.com</a></li>
                                <br/>
                                <li> <p> (75) 988383174 </p> </li>
                                <li> <p> CONTACT US</p> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-2 col-xs-3">
                            <ul>
                              <li> <h5> <a href="index.php"> HOME</a> <h5></li>
                        <li> <h5><a href="login.php"> LOGIN </a> <h5></li>
                        <li> <h5><a href="register.php"> REGISTER </a> <h5></li>
                        <li> <h5><a href="#"> CONTACT </a> <h5></li>
                            </ul>
                        </div>
                       
                    <!--/.row--> 
                </div>
                <!--/.container--> 
            </div>
            <!--/.footer-->                   
            <div class="footer-bottom">
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