<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SelimLab - Research Areas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/selimlab.css?t=1464127170471">
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body>
        <?php include_once("include/analyticstracking.php") ?>
        <?php require_once('include/navbar.php'); ?>
        <div class="container font-size-controller">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Research Experience</h1>
                    <h3>Photo-chemical synthesis of nanomaterials</h3>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="spacer-2em"></div>
                            <img class="full-width" src="img/synthesis-of-nanomaterials.png" />
                            <div class="spacer-4em"></div>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="spacer-3em hidden-xs hidden-sm"></div>
                            <p>We explore the use of photons with variable wavelength and intensity  to control the particle size and morphology and deposit nanocrystalline films of semiconductors and dielectrics for LEDs and energy applications.</p>
                            <p>The growth processes take place in our class 100 clean room to obtain high purity materials by employing our wide range  illumination sources  and panels.</p>
                        </div>
                    </div>

                    <h3>ZnO: Fundamental Physics and optoelectronic devices</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="spacer-2em"></div>
                            <img class="full-width" src="img/optoelectronic-devices.png" />
                            <div class="spacer-4em"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="spacer-4em hidden-xs hidden-sm"></div>
                            <p>ZnO Research in our lab focuses on synthesis and characterization of  ZnO thin films and bulk crystals for optoelectronic devices and TCO applications while investigating the fundamental physics of defects  and  optoelectronic properties of ZnO, one of the most complex binary system  in terms of its defect and related solid-state electronic properties.</p>
                        </div>
                    </div>

                    <h3>Multifunctional complex oxides</h3>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="spacer-2em"></div>
                            <img class="full-width" src="img/complex-oxides.png" />
                            <div class="spacer-4em"></div>
                        </div>
                        <div class="col-sm-6 col-md-7 col-md-offset-1">
                            <div class="spacer-4em hidden-xs"></div>
                            <p>We explore novel physical phenomena such as the formation of 2DEG and giant photoconductivity  induced in  multifunctional complex oxides by generating and tuning point defects at the interfaces.</p>
                            <p>Following epitaxial growth by MOCVD or ALD, defects  are populated by photo- and thermal processing using our unique gas mixing panel with atomic precision control.</p>
                        </div>
                    </div>

                    <h3>Positron annihilation spectroscopy</h3>
                    <div class="spacer-2em"></div>
                    <img class="full-width" src="img/digital-doppler-spectrometer.png" />
                    <div class="spacer-4em"></div>
                    <p>We developed the first fully digital Coincidence Doppler broadening spectrometer. It is expected to greatly improve the sensitivity of Doppler broadening in probing the electron momentum distributions and identifying the chemical environment around defects.</p>
                    <p>Our lab hosts a positron lifetime spectrometer and a coincident Doppler broadening system that provide crucial tools  for defect studies and assist us in revealing the source of many interesting phenomena.</p>

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
            $('.nav #research, #research a').addClass('active');
        </script>
    </body>
</html>
