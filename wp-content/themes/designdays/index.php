<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días de diseño</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/base-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/grids-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/grids-responsive-min.css">
</head>

<body>
    <?php include 'pages/cover.php' ?>
    <?php include 'pages/about.php' ?>
</body>
<script>
    document.getElementById('cover').play();
</script>

</html>