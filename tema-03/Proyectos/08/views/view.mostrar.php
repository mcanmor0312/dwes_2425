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

        <legend>Formulario Mostrar libro</legend>

        <form >

            <!-- id -->
            <div class="mb-3 row">
                <label for="inputid" class="col-sm-2 col-form-label">Id:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputid" name="id" value="<?= $registro['id'];?>" readonly>
                </div>
            </div>
            <!--Título-->
            <div class="mb-3 row">
                <label for="inputTitulo" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTitulo" name="titulo" value="<?= $registro['titulo']; ?> "readonly>
                </div>
            </div>
            <!--Autor-->
            <div class="mb-3 row">
                <label for="inputAutor" class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAutor" name="autor" value="<?= $registro['autor']; ?> "readonly>
                </div>
            </div>
            <!--Editorial-->
            <div class="mb-3 row">
                <label for="inputEditorial" class="col-sm-2 col-form-label">Editorial</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEditorial" name="editorial" value="<?= $registro['editorial']; ?> "readonly>
                </div>
            </div>
            <!--Genero-->
            <div class="mb-3 row">
                <label for="inputGenero" class="col-sm-2 col-form-label">Genero</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGenero" name="genero" value="<?= $registro['genero']; ?> "readonly>
                </div>
            </div>
            <!--Precio-->
            <div class="mb-3 row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPrecio" name="precio" value="<?= $registro['precio']; ?> "readonly>
                </div>
            </div>

            <!--Botones-->
            <a class="btn btn-primary" href="index.php" role="button">Atras</a>


        </form>

        <!-- pie del documento -->
        <?php include 'views/partials/footer.html'; ?>


    </div>

    <?php include 'views/layouts/javascript.html'; ?>
    </>


</html>