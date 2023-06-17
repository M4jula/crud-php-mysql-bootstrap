<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
  </head>
  <body>
    <!--- NavBar Inicio-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=novo">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=listar">Listar Usuarios</a>
        </li>
       

        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Procurar</button>
      </form>
    </div>
  </div>
</nav>
    <!--- NavBar Fim -->

    <!--inicio php -->
    
    <div class="container">
        <div class="row">
            <div class "col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case"novo":
                            include("novo-usuario.php");
                        break;
                        case "listar":
                            include("listar-usuario.php");
                        break;
                        case "salvar":
                            include("salvar-usuario.php");
                        break; 
                        case "editar":
                            include("editar-usuario.php");
                        break;       
                    }
                 ?>

            </div>
        </div>
    </div>
    <!-- final php -->


    <script src="js/bootstrap.bundle.min.js">
    </script>

  </body>
</html>
