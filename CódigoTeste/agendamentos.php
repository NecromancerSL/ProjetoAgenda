<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">

  <title>Home</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Olá, <?php session_start();echo $_SESSION["nomeusuario"]; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Agendamentos <span class="sr-only"></span></a>
          </li>
        </ul>
        <form class="d-flex">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <h1 class="titulo" id="texto">Agendamentos</h1>
      <div class="mb-3">
        <table style='text-align: center;' class='table table-active'>
          <tr class='table-secondary'>
            <th> Titulo </th>
            <th> Cor </th>
            <th> Data Inicial </th>
            <th> Data Final </th>
            <th> Ação</th>
          <tr>
          
            <?php
            include "db.php";
            $usuID = $_SESSION["ID"];
            $query_envents = "select id,title,color,start,end from agendamento where usuarioID=" . $usuID;
            $resultado = mysqli_query($conexao, $query_envents);
            while ($row_events = $resultado->fetch_array()) {
              $id= $row_events['id'];
              $title = $row_events['title'];
              $color = $row_events['color'];
              $start = $row_events['start'];
              $end = $row_events['end'];
              
              
              echo "<tr><td>$title</td> <td style='background-color:$color ;'></td> <td>".date('d/m/Y H:i:s', strtotime($start))."</td> <td>".date('d/m/Y H:i:s', strtotime($end))."</td>";
              echo "<td><a href='agendamento_formulario_editar.php?id=$id'class='btn btn-primary'>Editar</a><a href='deletar.php?id=$id'class='btn btn-danger'>Apagar</a></td></tr>";
            }
            
            mysqli_close($conexao);
            ?>

        </table>
      </div>
      <div class="mb-3">
        <a href="agendamento_formulario.php">
          <button type="button" class="btn btn-success botao">Agendar</button>
        </a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>