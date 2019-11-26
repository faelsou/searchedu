<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<!--
        Massively by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <a href="index.php" class="logo">Search Edu</a>
            </header>

            <!-- Nav -->
            <nav id="nav">
                <ul class="links">
                    <li class="active"><a href="login.php">Login</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="ranking.php">Ranking</a></li>
                    <li><a href="avalie.php">Avalie</a></li>
                    <li><a href="index.php#footer">Cadastre -se</a></li>

                </ul>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                </ul>
            </nav>

            <!-- Main -->
            <div id="main">

                <!-- Post -->
                <section class="post">
                    <header class="major">
                        <h1>Login<br />
                        </h1>
                    </header>




                <!--login-->


                    <footer id="footer">
                
                <section>
                    
                    <form method="POST" action="processa.php">
                        <div class="fields">
                            
                            <div class="field">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" placeholder="Digite seu e-mail"  />
                            </div>
                            

                            <div class="field">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" placeholder="Digite sua senha" />
                            </div>
                            

                            <!-- Break -->  

                        </div>
                        <ul class="actions">
                        <li><a href="#" class="button primary">Entre</a></li>
                            
                        </ul>
                        
                        <a href="login.php">Esqueceu a senha?</a>
                    </form>
                </section>
                
            </footer>


                   



                    <!-- Copyright -->
                    <div id="copyright">
                        <ul><li>&copy; Search Edu</li><li> 
                    </div>

            </div>

            <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
