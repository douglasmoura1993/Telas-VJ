<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acesso Professor</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        
 
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/front-picture.jpg" alt="sing up image"></figure>
                    </div>
                    <div class="form-title">
                    <?php
                    	if (isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notificaton is-danger">
                    	<p>Erro: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
					endif;
					unset($_SESSION['nao_autenticado']);
				    ?>
           						
                        	<h2 class="form-title">Login Professor</h2>
                        	<form action="login.php" method="POST" class="register-form" id="login-form">   

                            <div class="form-group">
                            	<label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="E-mail"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="senha" id="your_pass" placeholder="Senha"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Mantenha-me Conectado</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Entrar"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Acesse com </span>
                            <ul class="socials">
                                <li><a href="https://pt-br.facebook.com/"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://twitter.com/login?lang=pt"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://accounts.google.com/signin/v2/identifier?hl=pt-BR&passive=true&continue=http%3A%2F%2Fsupport.google.com%2Fmail%2Fanswer%2F8494%3Fco%3DGENIE.Platform%253DDesktop%26hl%3Dpt-BR&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

        </section>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>