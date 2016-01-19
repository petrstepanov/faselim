<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SelimLab - Teaching</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/selimlab.css?t=1453230389027">
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body>
        <?php include_once("include/analyticstracking.php") ?>
        <?php require_once('include/navbar.php'); ?>
        <div class="container font-size-controller">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Teaching</h1>
                    <div class="spacer-2em"></div>
                    <h3>Spring 2014</h3>
                    <p>Thermal Physics and Optics</p>
                    <div class="spacer-2em"></div>
                    <h3>Fall 2013</h3>
                    <p>Modern Physics Laboratory</p>
                </div>
            </div>
        </div>
        <?php
            require('include/footer.php');
        ?>
        <?php
            require('include/scripts.php');
        ?>
        <script>
            $('.nav #teaching, #teaching a').addClass('active');
        </script>
    </body>
</html>
