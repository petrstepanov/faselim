<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SelimLab - People</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/selimlab.css">
    </head>
    <body>
        <?php include_once("include/analyticstracking.php") ?>
        <?php require_once('include/navbar.php'); ?> 
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>People</h1>
                    <div class="spacer-2em"></div>
                    <h3>Celebrating Jianfeng Ji doctorate degree<br /><small>The Toledo Museum of Art, Spring 2015.</small></h3>
                    <img src="img/selim-lab-our-group-2015.jpg" alt="SelimLab group 2015 at Toledo Art Museum" class="full-width"/>
                    <div class="spacer-2em"></div>
                    <p><strong>From left to right</strong>: Petr Stepanov, Pooneh Saadatkia, Anthony Colosimo, Sunil Thapa, David Winarski, Ben Hardy, Jianfeng Ji, Farida Selim</p>
                    <div class="spacer-2em"></div>
                    <h3>Group Alumni<br /><small>Washington State University</small></h3>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="img/high-five.jpg" class="full-width"/>
                            <div class="spacer-1em"></div>
                            <p><small><strong>Left to Right</strong>: Amin Kham, Jianfeng Ji, Chris Varney</small></p>
                            <div class="spacer-1em"></div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="img/washington-state-university-lab.jpg" alt="Lab at Washington State" class="full-width"/>
                            <div class="spacer-1em"></div>
                            <p><small><strong>Left to Right</strong>: Kim Heiner, Farida Selim, Autumn Pratt</small></p>
                            <div class="spacer-1em"></div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="img/jianfeng-ji-teaching.jpg" class="full-width"/>
                            <div class="spacer-1em"></div>
                            <p><small><strong>Left to Right</strong>: Autumn Pratt, Kim Heiner, Jianfeng Ji</small></p>
                            <div class="spacer-1em"></div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="img/frederick-chen-poster.jpg" alt="Frederick Chen poster at SURCA" class="full-width"/>
                            <div class="spacer-1em"></div>
                            <p><small>Frederick Chen presents his poster at SURCA 2012</small></p>
                            <div class="spacer-1em"></div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="img/washington-state-group.jpg" alt="Washington State Group" class="full-width"/>
                            <div class="spacer-1em"></div>
                            <p><small><strong>Left to Right</strong>: Jianfeng Ji, Frederick Chen, Chris Varney, John Buscher</small></p>
                            <div class="spacer-1em"></div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="img/washington-state-group-alumni.jpg" alt="Washington State Group Alumni" class="full-width"/>
                            <div class="spacer-1em"></div>
                            <p><small><strong>Front</strong>: David Mackay, Farida Selim, Jianfeng Ji</small></p>
                            <p><small><strong>Back</strong>: Chris Varney, Autumn Pratt, John Buscher, Frederick Chen</small></p>
                            <div class="spacer-1em"></div>
                        </div>
                    </div>
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
            $('.nav #people').addClass('active');
        </script>
    </body>
</html>
