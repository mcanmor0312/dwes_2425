<!doctype html>
<html lang="en">

<head>
    <?php include 'views/layouts/head.html'; ?>
    <title>Proyecto 3.1</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <?php include 'views/partials/header.html'; ?>

        <legend>Formulario Mostrar alumno</legend>

        <form>
            <!--Id-->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputId" name="id" value="<?= $registro['id'];?> " disabled>
                </div>
            </div>
            <!--Nombre-->
            <div class="mb-3 row">
                <label for="inputNombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNombre" name="nombre" value="<?= $registro['nombre'];?> ">
                </div>
            </div>
            <!--Poblacion-->
            <div class="mb-3 row">
                <label for="inputPoblacion" class="col-sm-2 col-form-label">Poblacion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPoblacion" name="poblacion" value="<?= $registro['poblacion'];?> ">
                </div>
            </div>
            <!--Curso-->
            <div class="mb-3 row">
                <label for="inputCurso" class="col-sm-2 col-form-label">Curso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCurso" name="curso" value="<?= $registro['curso'];?> ">
                </div>
            </div>

            <!--Botones-->
            <a class="btn btn-primary" href="index.php" role="button">Volver</a>


        </form>

        <!-- pie del documento -->
        <?php include 'views/partials/footer.html'; ?>


    </div>

    <?php include 'views/layouts/javascript.html'; ?>
    </>


</html>