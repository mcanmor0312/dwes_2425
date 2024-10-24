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
    <form method="POST" action="calcular.php">

      <!-- Valor 1 -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Velocidad inicial</span>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="valor1">
      </div>
      <a>Velocidad en m/s</a>
      <!-- Valor 1 -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Angulo Lanzamiento</span>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="valor2">
      </div>
      <a>Ángulo en grados</a>
      <br>
      <br>
      <!-- botones de acción -->
      <div class="btn-group" role="group">
        <button type="reset" class="btn btn-secondary">Borrar</button>
        <button type="submit" class="btn btn-warning" >Calcular</button>
      </div>

    </form>

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