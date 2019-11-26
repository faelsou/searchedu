<?php

session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnAvaliacao', FILTER_SANITIZE_STRING);
if($btnAvaliacao){
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
-->
<html>
    <head>
        <title>Avalie</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/estilo.css" />
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
                    <li class="active"><a href="avalie.php">Avalie</a></li>
                    <li><a href="index.php">Home</a></li>        
                    <li><a href="ranking.php">Ranking</a></li>
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

                <!-- Post -->
                <section class="post">
                    <header class="major">
                        <h1>Avalie a instituiçao<br /></h1>

                    </header>

                    <!-- Blockquote -->
                    <h2>O que é?</h2>
                    <blockquote>"SearchEdu é um site onde os usuários podem encontrar e avaliar as instituições de ensino, auxiliando novos estudantes na tomada de decisão"</blockquote>

                    <hr />
                    <!--Avaliacao-->
                    <h2>Perguntas</h2>
                    <br>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                    <!--pergunta 1-->
                    <p> 1. Mecanismos gerais de de avaliação do ensino-aprendizagem, Políticas institucionais para incentivo à pesquisa?</p>

                    <form method="POST" action="votacao.php" enctype="multpart/form-data">

                   
                        <div class="estrelas">
                                <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                                <label for="cm_star-1"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-1" name="fb" value="1"/>
                                <label for="cm_star-2"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-2" name="fb" value="2"/>
                                <label for="cm_star-3"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-3" name="fb" value="3"/>
                                <label for="cm_star-4"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-4" name="fb" value="4"/>
                                <label for="cm_star-5"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-5" name="fb" value="5"/>
                        </div>
                 
                            <!-- pergunta 2-->
                            <p> 2. Políticas gerais de apoio ao aluno: apoio ao  desenvolvimento de carreira, apoio à permanência na Universidade, Políticas de acesso à Universidade (vestibular, transferência, retorno e reingresso), ofertas de intercâmbio?</p>

                            
                                <div class="estrelas">
                                        <input type="radio" id="cm_star-empty2" name="fb2" value="" checked/>
                                        <label for="cm_star-6"><i class="fa"></i></label>
                                        <input type="radio" id="cm_star-6" name="fb2" value="1"/>
                                        <label for="cm_star-7"><i class="fa"></i></label>
                                        <input type="radio" id="cm_star-7" name="fb2" value="2"/>
                                        <label for="cm_star-8"><i class="fa"></i></label>
                                        <input type="radio" id="cm_star-8" name="fb2" value="3"/>
                                        <label for="cm_star-9"><i class="fa"></i></label>
                                        <input type="radio" id="cm_star-9" name="fb2" value="4"/>
                                        <label for="cm_star-10"><i class="fa"></i></label>
                                        <input type="radio" id="cm_star-10" name="fb2" value="5"/>
                                </div>
                                    <br>
                                    <br>

                                    <!--pergunta 3-->
                                    <p> 3. Infraestrutura salas de aula e Laboratórios (tamanho, iluminação, climatização; equipamentos de informática, instalações elétricas, qualidade do mobiliário, internet)?</p>

                                    
                                        <div class="estrelas">
                                                <input type="radio" id="cm_star-empty3" name="fb3" value="" checked/>
                                                <label for="cm_star-11"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-11" name="fb3" value="1"/>
                                                <label for="cm_star-12"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-12" name="fb3" value="2"/>
                                                <label for="cm_star-13"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-13" name="fb3" value="3"/>
                                                <label for="cm_star-14"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-14" name="fb3" value="4"/>
                                                <label for="cm_star-15"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-15" name="fb3" value="5"/>
                                        </div>
                                            <br>
                                            <br>
                                            <!--pergunta 4-->
                                        <p> 4. Infraestrutura auditórios (capacidade, iluminação, climatização, projetores, áudio, cadeiras, recursos audiovisuais em geral, internet)?</p>
                                            
                                        <div class="estrelas">
                                                <input type="radio" id="cm_star-empty4" name="fb4" value="" checked/>
                                                <label for="cm_star-16"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-16" name="fb4" value="1"/>
                                                <label for="cm_star-17"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-17" name="fb4" value="2"/>
                                                <label for="cm_star-18"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-18" name="fb4" value="3"/>
                                                <label for="cm_star-19"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-19" name="fb4" value="4"/>
                                                <label for="cm_star-20"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-20" name="fb4" value="5"/>
                                        </div>
                                                    <br>
                                                    <br>
                                                    <!--pergunta 5-->
                                        <p> 5. Acessibilidade: Arquitetura inclusiva (rampas, elevadores, sanitários adaptados, vagas nos estacionamentos, mobiliário, equipamentos, etc.)?</p>
                                                  
                                        <div class="estrelas">
                                                <input type="radio" id="cm_star-empty5" name="fb5" value="" checked/>
                                                <label for="cm_star-21"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-21" name="fb5" value="1"/>
                                                <label for="cm_star-22"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-22" name="fb5" value="2"/>
                                                <label for="cm_star-23"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-23" name="fb5" value="3"/>
                                                <label for="cm_star-24"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-24" name="fb5" value="4"/>
                                                <label for="cm_star-25"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-25" name="fb5" value="5"/>
                                        </div>
                                                            <br>
                                                            <br>

                                                <!--pergunta 6-->
                                        <p> 6. Biblioteca (quantidade e variedade do acervo, área disponível para estudo, horário de atendimento)?</p>
                                                            
                                        <div class="estrelas">
                                                <input type="radio" id="cm_star-empty6" name="fb6" value="" checked/>
                                                <label for="cm_star-26"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-26" name="fb6" value="1"/>
                                                <label for="cm_star-27"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-27" name="fb6" value="2"/>
                                                <label for="cm_star-28"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-28" name="fb6" value="3"/>
                                                <label for="cm_star-29"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-29" name="fb6" value="4"/>
                                                <label for="cm_star-30"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-30" name="fb6" value="5"/>
                                        </div>
                                                                    <br>
                                                                    <br>

                                        <!--pergunta 7-->
                                        <p> 7. Atendimento ao Estudante: Serviços gerais ao estudante (serviços em geral da Secretaria -atividades administrativas/financeira, disponibilidade de canais de atendimento, agilidade no retorno das solicitações, disponibilidade de informações, políticas de atendimento)?</p>
                                                                    
                                        <div class="estrelas">
                                                <input type="radio" id="cm_star-empty7" name="fb7" value="" checked/>
                                                <label for="cm_star-31"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-31" name="fb7" value="1"/>
                                                <label for="cm_star-32"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-32" name="fb7" value="2"/>
                                                <label for="cm_star-33"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-33" name="fb7" value="3"/>
                                                <label for="cm_star-34"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-34" name="fb7" value="4"/>
                                                <label for="cm_star-35"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-35" name="fb7" value="5"/>
                                        </div>
                                                                            <br>
                                                                            <br>

                                        <!--pergunta 8-->
                                        <p> 8. Competência do corpo docente (Demonstração de conhecimento atualizado e domínio do conteúdo da disciplina, Clareza e objetividade das informações passadas, Metodologia de ensino/avaliação, assiduidade/pontualidade)?</p>
                                                                           
                                        <div class="estrelas">
                                                <input type="radio" id="cm_star-empty8" name="fb8" value="" checked/>
                                                <label for="cm_star-36"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-36" name="fb8" value="1"/>
                                                <label for="cm_star-37"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-37" name="fb8" value="2"/>
                                                <label for="cm_star-38"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-38" name="fb8" value="3"/>
                                                <label for="cm_star-39"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-39" name="fb8" value="4"/>
                                                <label for="cm_star-40"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-40" name="fb8" value="5"/>
                                        </div>
                                        <br>
                    <br>
                    <br>
                    <h3>COMENTE FATOR(ES) POSITIVO(S)</h3>
                    <div class="col-12">
                        <textarea name="demo-message" id="demo-message" placeholder="" rows="4"></textarea>
                    </div>
                    <br>

                    <h3>COMENTE FATOR(ES) NEGATIVO(S)</h3>
                    <div class="col-12">
                        <textarea name="demo-message" id="demo-message" placeholder="" rows="4"></textarea>
                    </div>
                    <br>

                    <div class="col-12">
                        <select name="demo-category" id="demo-category">
                            <option value="">Instituição</option>
                            <!--
                                                                                        <option value="1">Analise e Desenvolvimento de Sistemas</option>
                                                                                        <option value="1">Analise e Desenvolvimento de Sistemas</option>
                                                                                        <option value="1">Analise e Desenvolvimento de Sistemas</option>
                                                                                        <option value="1">Engenharia da Computação</option>
                                                                                        <option value="1">Sistemas da indormação</option>
                                                                                        <option value="1">Redes de Computadores</option>
                                                                                        <option value="1">Banco de Dados</option>
                                                                                        <option value="1">Segurança da Informação</option>
                                                                                        -->
                        </select>
                    </div>
                    <br>

                    <br>

                    <div class="col-12">
                        <select name="demo-category" id="demo-category">
                            <option value="">- Curso-</option>
                            <option value="1">Analise e Desenvolvimento de Sistemas</option>
                            <option value="1">Engenharia da Computação</option>
                            <option value="1">Sistemas da indormação</option>
                            <option value="1">Redes de Computadores</option>
                            <option value="1">Banco de Dados</option>
                            <option value="1">Segurança da Informação</option>
                        </select>
                    </div>
                    <br>
                    <br>



                    <h5>
                        De 1 a 10 quanto voce indica a instituição?
                    </h5>

                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <button type="button" class="btn btn-secondary">3</button>
                        <button type="button" class="btn btn-secondary">4</button>
                        <button type="button" class="btn btn-secondary">5</button>
                        <button type="button" class="btn btn-secondary">6</button>
                        <button type="button" class="btn btn-secondary">7</button>
                        <button type="button" class="btn btn-secondary">8</button>
                        <button type="button" class="btn btn-secondary">9</button>
                        <button type="button" class="btn btn-secondary">10</button>
                </div>
                    <!-- <div class="btn-default"> 
                        <button type="button" class="btn btn-primary" 
                            style="background-color:rgb(240, 0, 0)">1</button>
                        <button type="submit" class="btn btn-primary" 
                            style="background-color:rgb(240, 0, 0)">2</button>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:rgb(255, 125, 0)">3</button>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:rgb(255, 125, 0)">4</button>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:rgb(255,255,0)">5</button>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:rgb(255,255,0)">6</button>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:rgb(255,255,0)">7</button>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:rgb(50,205,50)">8</button>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:rgb(50,205,50)">9</button>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:rgb(50,205,50)">10</button>

                    </div>-->
                    <br>





                    <ul class="actions">
                            <li><input type="submit" name="btnAvaliacao" value="Avaliar" /></li>
                            
                        </ul>
                </form>
                                                                            <!-- Copyright -->
                                                                            <div id="copyright">
                                                                                <ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
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
