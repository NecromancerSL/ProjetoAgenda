<!DOCTYPE html>
<html lang="pt-br">
<?php include "verificar.php";?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='js/fullcalendar/main.js'></script>
        <script src='js/fullcalendar/locales/pt-br.js'></script>
        <link rel="icon" type="image/png" sizes="32x32" href="imagens/icones/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/8b69b9518f.js" crossorigin="anonymous"></script>
        <link href='css/fullcalendar/main.css' rel='stylesheet' />
        <link rel="stylesheet" href="css/estilo.css">
        <title>Sobre nós</title>
    </head>

    <body>
    <a name="topo">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="perfil.php"><?php echo strtok($_SESSION["nomeusuario"], " ");?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="agendamentos.php?pagina=1">Agendamentos<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="tutorial.php">Tutorial<span class="sr-only"></span></a>
                        </li>
                    </ul>
                    <li class="nav-item active">
                        <a class=" btn btn-danger" href="logout.php?token='.md5(session_id()).'">Sair <span
                                class="sr-only"></span></a>
                    </li>
                </div>
            </div>
        </nav>

        <div class=container>
            <div class="text-center">
                <h2>GRUPO 2</h2>
            </div>
            <br> 
            <div>
                <h3>Sobre Nós :</h3>
                <p>O grupo 2 foi criado para a matéria de Desenvolvimento de Software II na Faculdade Eduvale Avaré, sendo constituído por Gustavo Nunes, Gustavo Tavares e Yuri Furgeri, o grupo 2 tem como objetivo principal a entrega de um serviço de qualidade e de fácil acesso, sendo de suma importancia a comunicação entre os integrantes o grupo 2 se destaca pela união e excelência na execução do projeto.</p>    
            </div>
            <br>
            <div class="d-flex flex-column align-items-center">
                <img width="400px"height="300px" src="imagens/sobre_nos/imagemgrupo2.png">
            </div>
            <br>
            <div>
                <h3>Agenda Feliz :</h3>
                <p>A agenda feliz é uma Web Agenda para uso geral, sendo adequada para todos os públicos e de fácil uso a Agenda Feliz se destaca pelo seu design minimalista e direto ao ponto, para facilitar a acessibilidade e entregar maior desempenho. As tarefas são vistas por ordem de importância e urgencia trazendo uma experiência visual de fácil entendimento. A Agenda Feliz não só proporciona agendamentos e horários, mas uma proposta de organização e produtividade para o dia a dia de todo usuário.</p>    
            </div>
            <br>
            <div class="d-flex flex-column align-items-center">
                <img width="300px"height="300px" src="imagens/sobre_nos/agendafelizdesign1.png">
            </div>
            <br>
            <div>
                <h3>Sobre o Projeto:</h3>
                <p>O projeto passa por todas as etapas do desenvolvimento de um software, desde o planejamento e documentação até a programação, testes e entrega. Com bastante foco no trabalho em equipe e nos procedimentos internos, a matéria visa demonstrar uma visão mais próxima da realidade e do dia a dia de um desenvolvedor e as etapas necessárias para a implementação de um projeto do zero.</p>    
            </div>
        </div>
        
        
            
        <br>
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://twitter.com/grupo2ads" role="button"><i
                            class="fab fa-twitter"></i></a>
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.instagram.com/grupo2_ads/" role="button"><i
                            class="fab fa-instagram"></i></a>
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1"  href="#" role="button"><i
                            class="fab fa-linkedin-in"></i></a>
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://github.com/NecromancerSL/ProjetoAgenda" role="button"><i
                            class="fab fa-github"></i></a>
                </section>
                <section>
                    <div class="row">
                        <div class="mb-4">

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#topo" class="text-white">Voltar para o Topo</a>
                                </li>
                                <li>
                                    <a href="feedback_formulario.php" class="text-white">Enviar Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright: <a class="text-white" href="sobrenos.php">Grupo 2</a>
            </div>
        </footer>
    </body>
</html>