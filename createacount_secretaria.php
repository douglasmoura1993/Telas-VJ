<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RegistroVJ</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
    
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                    	<div class="col-sm-3 my-5" > 
         					 <div class="card">
                               
            						
				          </div>
				        </div>
                        <h2 class="form-title">Secretaria</h2>
                        <form  action="secretaria_cad.php" method="POST" >
                            <?php
                                if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                            ?>
                            <?php
                                if(isset($_SESSION['fail'])){
                                    echo $_SESSION['fail'];
                                    unset($_SESSION['fail']);
                                }
                            ?>

                        	<!--Ra-->
                            <div class="form-group">
                                <label for="registry"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="registro" id="registry" placeholder="Registro Interno" required/>
                            </div>
                            <!--Nome-->
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nome" id="name" placeholder="Nome Completo" required/>
                            </div>
                            <!--Email-->
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="E-mail" required/>
                            </div>
                            <!--Senha-->
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="senha" id="pass" placeholder="Senha" required/>
                            </div>
                            <div class="form-group text-aline-center">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Li e concordo com o 
                                <a href="#" class="term-service">Termo de Uso</a></label>
                     
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Registrar"/>
                            </div>
                        </form>
                    </div>
                    <!--
                    <div class="front-picture">
                        <figure><img src="images/front-picture.jpg" alt="front-picture"></figure>
                        <a href="Login.html" class="front-picture-link">Já possuo Cadastro</a>
                    </div>
					-->
                </div>
            </div>
        </section>
        
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>