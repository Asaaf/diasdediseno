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

    <!--JQUERY-->
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/libraries/jQuery/jquery-3.6.0.min.js"></script>

    <!--FULLPAGE-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.7/fullpage.min.js" integrity="sha512-MLy5YE5Hiyow/qhqZAsO91PjjWUBngedTSWTdvSbEPjFienlVY6SJ8Uy7eLHkudkv3kTJ7NFHZ9s0JD/UwpHdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.7/fullpage.extensions.min.js" integrity="sha512-0OyTRsdzhnPV6cpOnN8I1diwYg70M0um8yAixOzJ6ZaxUMVRvFu+B2loBVxQVxc00efCMyRxuKc0KfSPrc91Dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.7/vendors/easings.min.js" integrity="sha512-SrKslwu6IjHEo/8mAOtkoUOT3MzHCEOFWktrC8BNtjPuBBYLYjg1y/Marat34uYfOfxDMLEwy8DLArWEVc2i+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.7/fullpage.min.css" integrity="sha512-UAJzvXdoBJReHrVgQJR2nNYWuW6GoW6aLUI1DNWlily9LYwaUILr/7Qc8ve8aFwk1d+x+JHU89cKTrrvWaHAXQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'pages/menu.php' ?>
    <?php
    $page = $wp_query->get_queried_object();
    ?>
    <div class="cover-section-image">
        <?php
        if (has_post_thumbnail($page->ID)) {
            echo get_the_post_thumbnail($page->ID);
        }
        ?>
        <div class="title">
            <h1><?php echo $page->post_title; ?></h1>
        </div>
    </div>
    <div class="content">
        <?php echo $page->post_content; ?>
    </div>
    <?php include 'pages/footer.php' ?>

    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/menu.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/loader.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/glitch.js"></script>

</body>

</html>