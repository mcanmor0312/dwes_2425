<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2.2 Cálculo Lanzamiento de Proyectiles</title>

  <!-- css bootstrap 533 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- bootstrap icons 1.11.3 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body >
  <!-- capa principal -->
  <div class="container">

    <!-- cabecera documento -->
    <header class="pb-3 mb-4 border-bottom">
      <i class="bi bi-camera-reels-fill"></i>
      <span class="fs-6">2.2 Cálculo Lanzamiento de Proyectiles</span>
    </header>

    <!-- formulario -->
    <legend>Lanzamiento de Proyectiles</legend>

    <!-- fin del formulario -->

    <!-- On tables -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" colspan="2">Valores Iniciales:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">Velocidad Inicial:</td>
          <td><?= $velInicial . " m/s" ?></td>
        </tr>
        <tr>
          <td scope="row">Ángulo Inclinación:</td>
          <td><?= $anguloGrados . "°" ?></td>
        </tr>

        <tr>
          <th scope="col" colspan="2">Resultados:</th>
        </tr>
        <tr>
          <td scope="row">Ángulo Radianes:</td>
          <td><?= $anguloRad . " Radianes" ?></td>
        </tr>
        <tr>
          <td scope="row">Velocidad Inicial X:</td>
          <td><?= $vHor . " m/s" ?></td>
        </tr>
        <tr>
          <td scope="row">Velocidad Inicial Y:</td>
          <td><?= $vVer . " m/s" ?></td>
        </tr>
        <tr>
          <td scope="row">Alcance Máximo del Proyectil:</td>
          <td><?= $alcanceMax . " m" ?></td>
        </tr>
        <tr>
          <td scope="row">Tiempo de Vuelo del Proyectil:</td>
          <td><?= $tiempoTot . " s" ?></td>
        </tr>
        <tr>
          <td scope="row">Altura Máxima del Proyectil:</td>
          <td><?= $altMax . " m" ?></td>
        </tr>


      </tbody>
    </table>

    <div class="btn-group" role="group">
      <a class="btn btn-primary" href="index.php" role="button">Volver</a>
    </div>

    <!-- pie del documento -->
    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
      <div class="container">
        <span class="text-muted">© 2024
          Marcos Canto Moreno - DWES - 2º DAW - Curso 24/25
        </span>
      </div>
    </footer>

  </div>

  <!-- javascript bootstrap 533 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </>

</html>