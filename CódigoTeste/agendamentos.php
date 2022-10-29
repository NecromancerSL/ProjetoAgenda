<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link CSS-->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title>Home</title>
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
             
            </ul>
            <form class="d-flex">            
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

 <div class="container">
 
      <div class="row justify-content-center align-items-center vh-100">
        
                  <div class="col-auto background">

                    <h1 class="titulo" id="texto">Cálculo de Notas Acadêmicas</h1>

                        <div class="row  justify-content-center align-items-center">

                            <div class="col mb-3">
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Digite a nota</label>
                                <input type="number" class="form-control inputvalor" id="notas">   
                              </div>
                            </div>

                            <div class="col mb-3">
                              <button  type="button" class="btn btn-primary botao" id="btnadicionar">Adicionar</button> 
                            </div>

                        </div>

                        <div class="row  justify-content-center align-items-center">

                          <div class="col mb-3">
                            <label for="formGroupExampleInput" class="form-label">Listagem de Notas</label>
                            <ul class="list-group inputvalor" id="lista">                                               
                            </ul>
                          </div>                    

                        </div>

                        <div class="row  justify-content-center align-items-center">

                          <div class="col mb-3">
                            <label for="formGroupExampleInput" class="form-label">Resultados:</label>
                            <div class="progress" style="height: 30px">
                              <div class="progress-bar" id="barra" role="progressbar" style="width: 0%;"></div>
                            </div>
                          </div>                    

                        </div>

                      <div class="row  justify-content-center align-items-center">

                        <div class="col mb-3"></div>
                        <div class="col mb-3">
                          <button  type="button" class="btn btn-success botaolimpar" id="btnlimpar">Limpar</button> 
                        </div>
                        <div class="col mb-3"></div>

                      </div> 
                </div>             
               
              
      </div>

</div>

<script src="js/calcular.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>