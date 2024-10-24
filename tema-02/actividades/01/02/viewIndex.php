<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 2.1.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- Muestro el título -->
        <h1> <?= $titulo; ?> </h1>
        <!-- Muestro la imagen -->
        <img
            src="<?= $cocheChino ?>"
            class="img-fluid rounded-top"
            alt=""
            width = "65%"
            />
        <!-- Muestro el párrafo-->
        <p> <?= $parrafo; ?> </p>
        <!-- Muestro el enlace -->
        <a href=<?= $enlace ?>>El pais</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>