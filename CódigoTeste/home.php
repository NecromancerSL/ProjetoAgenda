<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src='js/fullcalendar/main.js'></script>
    <script src='js/fullcalendar/locales/pt-br.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='css/fullcalendar/main.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/estilo.css">
    <title>Home</title>
    <script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
            right: 'prev,next today',
            left: 'title'
    },
    themeSystem: 'bootstrap5',
    locale: 'pt-br',
    editable: true,
    dayMaxEvents: true,
    events: 'calendario.php'
  });

  calendar.render();

  
});

</script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Olá, <?php session_start();  echo $_SESSION["nomeusuario"];?></a><!-- coloca php, no caso cham a variavel de sessão nomeusuario, é interessante usar a variavel de sessão para segurança(separar um usuario,gerente,desenvolvedor,etc)-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="">Home<span class="sr-only"></span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="agendamentos.php">Agendamentos<span class="sr-only"></span></a>
              </li>
            </ul>
            <form class="d-flex">            
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

  <div class="container">
    <h1 class="titulo" id="texto">Calendario</h1>
    <div id='calendar'>

    </div>
    <div class="row  justify-content-center align-items-center">
      <a href="agendamentos.php"><button  type="submit" class="btn btn-primary botao">Agendamentos</button> </a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>