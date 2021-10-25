
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vistas/css/cartas.css" />
    <link rel="stylesheet" href="vistas/css/general.css" />
  </head>
  <body>
    <header>
      <nav class="nav justify-content-center|justify-content-end">
        <a class="nav-link active" href="?controlador=juego&accion=cartas">Catálogo de cartas</a>
        <a class="nav-link active" href="?controlador=juego&accion=buscador">Buscador</a>

        <?php if ($_SESSION['id'] != null) {?>
          <a class="nav-link" href="?controlador=juego&accion=mis_mazos">Mis mazos</a>
          <a class="nav-link" href="?controlador=juego&accion=crear_mazo">Nuevo mazo</a>
          <a class="nav-link" href="?controlador=usuarios&accion=logout">Logout</a>
        <?php } else {?>
          <a class="nav-link" href="?controlador=usuarios&accion=login">Login</a>
        <?php }?>
      </nav>
      <div class="banner">
        <img src="vistas/img/Avacyn.webp" style="width: 700px;"/>
      </div>
    </header>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>