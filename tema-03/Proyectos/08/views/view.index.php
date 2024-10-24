<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto 3.1</title>

  <!-- css bootstrap 533 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- bootstrap icons 1.11.3 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <!-- capa principal -->
  <div class="container">

    <!-- cabecera documento -->
    <header class="pb-3 mb-4 border-bottom">
      <i class="bi bi-book"></i>
      <span class="fs-6">Proyecto 3.1 - Librería</span>
    </header>

    <!-- Mostrar la tabla de libros -->
    <legend>
      <h1>Tabla libros</h1>
    </legend>
    <!-- mostrar menu de libros -->
    <?php include 'views/partials/m_alumnos.php'; ?>

    <div class="table-responsive">
      <table
        class="table table-white">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Género</th>
            <th scope="col">Editorial</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- foreach para recorrer el array -->
          <?php foreach ($libros as $i => $registro): ?>
            <tr class="">
              <td scope="row"><?= $registro['id'] ?></td>
              <td><?= $registro['titulo'] ?></td>
              <td><?= $registro['autor'] ?></td>
              <td><?= $registro['genero'] ?></td>
              <td><?= $registro['editorial'] ?></td>
              <td><?= number_format($registro['precio'],2,",","." )?></td>
              <td>
                <a href="delete.php?id=<?= $registro['id'] ?>" title="Eliminar"
                  onclick="return confirm('Confirmar eliminacion del libro')">
                  <i class="bi bi-trash-fill"></i></a> <!-- Icono de Bootstrap -->
                <!-- Boton editar-->
                <a href="editar.php?id=<?= $registro['id'] ?>" title="Editar">
                  <i class="bi bi-pencil-square"></i></a> <!-- Icono de Bootstrap -->
                <!-- Boton mostrar-->
                <a href="mostrar.php?id=<?= $registro['id'] ?>" title="Mostrar">
                  <i class="bi bi-card-text"></i></a> <!-- Icono de Bootstrap -->
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
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