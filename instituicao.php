
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
                                <?php
                                    if (isset($_SESSION['usuario_existe'])):
                                ?>
                                    <div class="notificaton is-danger">
                                        <p>Usuário já cadastrado</p>
                                    </div>
                                <?php
                                    endif;
                                    unset($_SESSION['usuario_existe']);
                                ?>
                                <?php
                                    if (isset($_SESSION['status_cadastro'])):
                                ?>
                                    <div class="notificaton is-danger">
                                         <p>Cadastro realizado com sucesso.</p>
                                    </div>
                                <?php
                                    endif;
                                    unset($_SESSION['status_cadastro']);
                                 ?>
            						
				          </div>
				        </div>
                        <h2 class="form-title">Cadastro Da Instituição</h2>
                        <form  action="instituicaocadastro.php" method="POST" >
                        	<!--Ra-->
                            <div class="form-group">
                                <label for="registry"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="cnpjcpf" id="registry" placeholder="CNPJ ou CPF sem Pontos e Digitos" required/>
                            </div>
                            <!--Nome-->
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nome" id="name" placeholder="Nome Da Instituição" required/>
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
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
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