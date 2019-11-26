<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
    include_once 'conexao.php';
    $dqados = filter_input_array(INPUT_POST, FILTER_DEFALT);
    var_dump($dqados);
}

?>
<!DOCTYPE HTML>
<!--
        Massively by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

        https://code-boxx.com/autocomplete-javascript-php-mysql/
        
'       php5.2
-->
<html>
    <head>
        <title>Search Edu</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/estilo.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <script type="text/javascript">
            var dt = new Date();
            document.getElementById("datetime").innerHTML = dt.toLocaleString();
        </script>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper" class="fade-in">

            <!-- Intro -->
            <div id="intro">
                <h1>O melhor site de busca educacional<br />
                </h1>
                <!--<p>? <a href="https://br.creativecommons.org/">Creative Commons license</a>.</p>-->
                <ul class="actions">
                    <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
                </ul>
            </div>

            <!-- Header -->
            <header id="header">
                <a href="index.php" class="logo">Search Edu</a>
            </header>

            <!-- Nav -->
            <nav id="nav">
                <ul class="links">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="ranking.php">Ranking</a></li>
                    <li><a href="avalie.php">Avalie</a></li>
                    <li><a href="index.php#footer">Cadastre -se</a></li>
                    <li><a href="login.php">Login</a></li>
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

                <!-- Featured Post -->
                <article class="post featured">
                    <header class="major">
                        <!--<span id="datetime" class="date"><?php echo(strftime("%m/%d/%Y %H:%M")); ?></span>-->
                        <h2><a href="#">Encontre <br />
                                sua Instituição de Ensino</a></h2>
                        <p></p>
                    </header>
                    <table  class="posts">
                        <tbody style="width:800px">
                            <tr><td>
                                    <div style="height:50px; width:300px;" >
                                        <select>                                                         
                                            <optgroup >
                                                <option label="UF">Estado</option>					
                                                <option id="SP"value="SP">São Paulo - SP</option>
                                                <!--
                                                <option id="AL" value="AL">Alagoas - AL</option>
                                                <option id="AP" value="AP">Amapá - AP</option>
                                                <option id="AM"value="AM">Amazonas - AM</option>
                                                <option id="BA" value="BA">Bahia - BA</option>
                                                <option value="CE">Ceará - CE</option>
                                                <option value="DF">Distrito Federal - DF</option>
                                                <option value="ES">Espirito Santo - ES</option>
                                                <option value="GO">Goiás - GO</option>
                                                <option value="MA">Maranhão - MA</option>
                                                <option value="MS">Mato Grosso do Sul - MS</option>
                                                <option value="MT">Mato Grosso - MT</option>
                                                <option value="MG">Minas Gerais - MG</option>
                                                <option value="PA">Pará - PA</option>
                                                <option value="PB">Paraíba - PB</option>
                                                <option value="PR">Paraná - PR</option>
                                                <option value="PE">Pernambuco - PE</option>
                                                <option value="PI">Piauí - PI</option>
                                                <option value="RJ">Rio de Janeiro - RJ</option>
                                                <option value="RN">Rio Grande do Norte - RN</option>
                                                <option value="RS">Rio Grande do Sul - RS</option>
                                                <option value="RO">Rondônia - RO</option>
                                                <option value="RR">Roraima - RR</option>
                                                <option value="SC">Santa Catarina - SC</option>
                                                <option value="SP">São Paulo - SP</option>
                                                <option value="SE">Sergipe - SE</option>
                                                <option value="TO">Tocantins - TO</option>-->
                                            </optgroup>
                                        </select >
                                    </div></td>
                                <td>
                                    <div  style="height:50px; width:400px;" >
                                        <input type="text" id="universidade" placeholder="Digite o nome da instituição"/>

                                    </div>
                                </td>
                                <td>
                                    <div>                             
                                        <button type="Submit" class="button large" name="Buscar">Buscar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> 

                    <!--@Deprecated
                        <a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
                    <ul class="actions special">
                        <li><a href="#" class="button large">Full Story</a></li>
                    </ul>
                    -->
                </article>

                <!-- Posts People -->
                
                <section class="posts">
                    
                    <article>
                        <h2>Depoimento</h2>
                        <header>
                            <span class="date"><?php echo(strftime("%m/%d/%Y %H:%M")); ?></span>
                            <h2><a href="#">Angela Lis<br />
                                </a></h2>
                        </header>
                        <a href="#" class="image fit"><img src="images/foto1.jpg" alt="" /></a>
                        <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                        <ul class="actions special">
                            <!--<li><a href="#" class="button">Full Story</a></li>-->
                        </ul>
                    </article>
                    <article>
                        <header>
                            <span class="date"><?php echo(strftime("%m/%d/%Y %H:%M")); ?></span>
                            <h2><a href="#">Roberta Aurora<br />
                                </a></h2>
                        </header>
                        <a href="#" class="image fit"><img src="images/foto2.jpg" alt="" /></a>
                        <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                        <ul class="actions special">

                        </ul>
                    </article>
                    <article>
                        <header>
                            <span class="date"><?php echo(strftime("%m/%d/%Y %H:%M")); ?></span>
                            <h2><a href="#">Monica Shuyash<br />
                                </a></h2>
                        </header>
                        <a href="#" class="image fit"><img src="images/foto3.jpg" alt="" /></a>
                        <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                        <ul class="actions special">

                        </ul>
                    </article>
                    <article>
                        <header>
                            <span class="date"><?php echo(strftime("%m/%d/%Y %H:%M")); ?></span>
                            <h2><a href="#">Rebeca Lorenzo<br />
                                </a></h2>
                        </header>
                        <a href="#" class="image fit"><img src="images/foto4.jpg" alt="" /></a>
                        <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                        <ul class="actions special">

                        </ul>
                    </article>

            </div>

            <!-- Footer Cadastro-->
            
            <footer id="footer">
                
                <section>
                    <h2>Cadastre-se</h2>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                    <form method="POST" action="processa.php">
                        <div class="fields">
                            <div class="field">
                                <label for="name">Nome</label>
                                <input type="text" name="nome" placeholder="Digite o nome completo" />
                            </div>
                            <div class="field">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" placeholder="Digite seu e-mail"  />
                            </div>
                            <div class="field">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" placeholder="Digite seu telefone" />
                            </div>

                            <div class="field">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" placeholder="Digite sua senha" />
                            </div>
                            <!--
                            <div class="field">
                                <label for="senha">Confirme sua Senha</label>
                                <input type="text" name="senha" placeholder="Confirme sua senha" />
                            </div>
                            -->

                            <!-- Break -->
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-normal" name="demo-priority" checked>
                                <label for="demo-priority-normal">Estudante</label>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-normal" name="demo-priority">
                                <label for="demo-priority-normal">Não estudante</label>
                            </div>    

                        </div>
                        <ul class="actions">
                            <li><input type="submit" name="btnCadUsuario" value="Enviar" /></li>
                            
                        </ul>
                        
                        <a href="login.php">Clique aqui se você possui cadastro</a>
                    </form>
                </section>
                <section class="split contact">
                    
                </section>
            </footer>

            <!-- Copyright -->
            <div id="copyright">
                <ul><li>&copy; Search Edu</li><a href="https://www.searchedu.com.br"></a></li></ul>
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