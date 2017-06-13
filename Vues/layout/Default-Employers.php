<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>



    <!-- Bootstrap core CSS -->

    <link href="app/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="app/css/Accueil.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- NAVBAR
    ================================================== -->

    <div class="navbar-wrapper" style="BOX-SIZING: border-box;">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-wrapper navbar-static-top" data-spy="affix" data-offset-top="1" role="navigation">
                <div class="container">
                    <div class="navbar-header" style="margin-right: 0px; margin-left: 0px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../index.php">
                            <img class="logo" src="app/img/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="Commande/Je_Commande.php">Je commande</a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La communauté<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Nos prestataires-partenaires</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="La_Communauté/Confiance.html">Ils nous font confiance</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="La_Communauté/Il_vous_raconte.html">Ils vous racontent</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos offres<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Conciergerie volante</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="Nos_offres/Offre-Entreprise.html">Conciergerie d'entreprise</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="Nos_offres/Offre-Particulier.html">Conciergerie de quartier</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Nos services</a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Découvrir<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Decouvrir/Qui_somme_nous.html">Qui sommes nous !</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="Decouvrir/L'équipe.html">L'équipe</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Ou nous trouver ?</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Revue de presse</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon espace<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Connexion/Inscription.php?er">Inscription</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="Connexion/Connexion.php?mes">Connexion</a></li>
                                    
                                </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

<?php echo $content_for_layout; ?>
   

    <!-- /END THE FEATURETTES -->
    <!-- FOOTER -->

    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; Conciergin 2017 &middot; <a href="#">C.G.V.</a> &middot; </p>
    </footer>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="app/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="app/bootstrap/js/bootstrap.min.js"></script>
    <script src="app/bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="app/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <script type="text/javascript" src="app/bootstrap/js/jssor.slider.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            var options = {
                $AutoPlay: 0, //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $AutoPlaySteps: 1, //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 2000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: 1, //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                $SlideEasing: $Jease$.$OutQuint, //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                $SlideDuration: 800, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide, default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $Align: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: { //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: { //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
                    $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1, //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12, //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4, //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1, //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false //Scales bullets navigator or not while slider scale
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                } else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
</body>

</html>