<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>swcalculator - calculate s and w parameters of annihilation radiation</title>
        <meta name="description" content="The software might be quite useful for solid-state physicists who do materials characterization and work with positron spectroscopy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/selimlab.css?t=1464384886921">
        <link rel="shortcut icon" href="favicon.ico">        
    </head>
    <body>
        <?php include_once("include/analyticstracking.php") ?>
        <?php require_once('include/navbar.php'); ?>
        <div class="container font-size-controller">
            <div class="row">
                <div class="col-xs-12">
                    <h1>SWCalculator. Doppler S and W parameters software.</h1>

                    <p>The app <strong>calculates S and W parameters from the Doppler-broadened 511 peak</strong> of ionizing radiation.</p>

                    <p>SWCalculator might be quite useful for those physicists who work with positron spectroscopy. Main app features are:</p>

                    <div class="spacer-1em"></div>
                    <ul class="spaced">
                        <li>Supports a variety of different formats of input data files.</li>
                        <li>Fit the 511 peak with four gaussian functions and subtract atan() background.</li>
                        <li>Calculate S and W parameters for a series of spectra.</li>
                        <li>Export data points, fit and chi^2 to a .CSV file.</li>
                        <li>Save raster fit images.</li>
                    </ul>
                    <div class="spacer-1em"></div>

                    <img style="width: 100%" src="img/swcalculator-screenshot.png" alt="Screenshot of the SWCalculator app" title="Calculate S and W parameters from the 511 annihilation peak" />

                    <div class="spacer-1em"></div>
                    <p class="text-center">
                        <a href="https://github.com/petrstepanov/sw-calculator" rel="nofollow" class="btn wrap btn-primary btn-lg"><strong>Download swcalculator</strong> on GitHub</a>
                    </p>
                    <div class="spacer-2em"></div>

                    <p>The app is cross-platform, developed using CERN ROOT framework. GUI is based on the Xclass'95 widget library. You can download this software from the GitHub repository - download button above. As well as the source code - you can find precompiled binaries for MacOS, Ubuntu and Windows.</p><p>Shout us a word at <a title="Contact us" href="mailto: faridaselimlab@gmail.com">&#102;&#097;&#114;&#105;&#100;&#097;&#115;&#101;&#108;&#105;&#109;&#108;&#097;&#098;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a>. We'd love to hear any recommendations</a> to make the software better.</p>

                    <div class="spacer-2em"></div>
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="paypal-form" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                            ">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                        <div class="col-sm-7 col-sm-offset-1 col-md-8 col-md-offset-1">
                            <div class="spacer-2em visible-xs"></div>
                            <p><strong>Donations are never expected gut always gratefully appreciated.</strong></p>
                            <div class="spacer-1em"></div>
                            <p><small><b>Acknowledgments</b>. Petr Stepanov honors special thanks to <a href="https://www.researchgate.net/profile/Dmitry_Zvezhinskiy" target="_blank" rel="nofollow">Dmitry Zvezhinsky</a> – his scientific advisor in the <a href="http://www.itep.ru/eng/" target="_blank" rel="nofollow">Institute for Theoretical and Experimental Physics</a>.</small></p>
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
            $('.nav #software, #software a').addClass('active');
        </script>
    </body>
</html>
