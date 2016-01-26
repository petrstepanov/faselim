<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SelimLab - Research Facilities</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/selimlab.css?t=1453777509879">
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body>
        <?php include_once("include/analyticstracking.php") ?>
        <?php require_once('include/navbar.php'); ?>
        <div class="container font-size-controller">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Selim Lab Research Facilities<br/> <small>in Overman Hall, BGSU</small></h1>
                    <div class="spacer-2em"></div>
                    <h3>Synthesis Facilities</h3>
                    <ul class="spaced">
                        <li>Clean Room Class 100</li>
                        <li>State of the art automatic gas mixing panel</li>
                        <li>Nano-synthesis unit and annealing furnaces (up to 1700 C)</li>
                        <li>Thin and ultra-thin films spin processor</li>
                        <li>Atomic Layer Deposition and Metal Organic Chemical Vapour Deposition Systems under construction</li>
                    </ul>
                    <div class="spacer-2em"></div>
                    <h3>Characterization Facilities</h3>
                    <p>Our laboratory is a home of a wide variety of defect characterization techniques and advanced optical spectrometers including:</p>
                    <ul class="spaced">
                        <li>Positron lifetime spectrometer</li>
                        <li>Digital Coincidence Doppler Broadening Positron Annihilation Spectrometer (first digital system in United States)</li>
                        <li>Temperature-dependent Photo-Hall Effect System</li>
                        <li>Magnetoresistance effect set up</li>
                        <li>Thermo-luminescence spectrometer</li>
                        <li>Heating cooling sample stage ( 77k-700k) with optical measurements capabilities</li>
                        <li>UV-VIS-NIR spectrophotometer for optical absorption measurements</li>
                        <li>Photoluminescence spectrometer</li>
                        <li>X-ray luminescence based spectrometer for luminescence and scintillation measurements. <a href="http://scitation.aip.org/content/aip/journal/rsi/83/10/10.1063/1.4764772">We have developed this novel spectrometer</a>.</li>
                    </ul>
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
            $('.nav #facilities, #facilities a').addClass('active');
        </script>
    </body>
</html>
