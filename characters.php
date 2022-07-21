<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <?php include("includes/head.php"); ?>
        <link rel="stylesheet" type="text/css" href="resources/tabstyle/css/tabs.css" />
	    <script src="resources/tabstyle/js/modernizr.custom.js"></script>
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <section class="inner">
            <div class="container">
                <div class="flex-box contenido">
                    <article class="fondo">
                        <div class="borde-juego">
                            <h2>Personajes</h2>
                            <div class="tabs flex-box charaters-page">
                                <nav id="scrolling-2" class="menu-characters texto-contenido">
                                    <ul>
                                        <li><a href="#matias"><img src="img/char1.gif"></a></li>
                                        <li><a href="#leon"><img src="img/char1.gif"></a></li>
                                        <li><a href="#raquel"><img src="img/char1.gif"></a></li>
                                        <li><a href="#ariel"><img src="img/char1.gif"></a></li>
                                        <li><a href="#orion"><img src="img/char1.gif"></a></li>
                                        <li><a href="#abel"><img src="img/char1.gif"></a></li>
                                        <li><a href="#mixel"><img src="img/char1.gif"></a></li>
                                        <li><a href="#william"><img src="img/char1.gif"></a></li>
                                        <li><a href="#samantha"><img src="img/char1.gif"></a></li>
                                        <li><a href="#valkirie"><img src="img/char1.gif"></a></li>
                                        <li><a href="#kalila"><img src="img/char1.gif"></a></li>
                                        <li><a href="#samurai"><img src="img/char1.gif"></a></li>
                                        <li><a href="#emperatriz"><img src="img/char1.gif"></a></li>
                                        <li><a href="#yun"><img src="img/char1.gif"></a></li>
                                        <li><a href="#coronel"><img src="img/char1.gif"></a></li>
                                        <li><a href="#matilda"><img src="img/char1.gif"></a></li>
                                        <li><a href="#Emperador"><img src="img/char1.gif"></a></li>
                                        <li><a href="#Hallman"><img src="img/char1.gif"></a></li>
                                    </ul>
                                </nav>
                                <div class="character-text">    
                                    <div class="content-wrap">
                                        <section id="matias">
                                            <h3>Matias Zenglein</h3>
                                            <div class="data">
                                                <img class="borde-imagen" src="img/h1.jpg">
                                                <ul>
                                                    <li><strong>Edad:</strong> 19 a&ntilde;os</li>
                                                    <li><strong>Peso:</strong> 65 kg</li>
                                                    <li><strong>Altura:</strong> 1.65 m</li>
                                                    <li><strong>Ocupaci&oacute;n:</strong> Infanter&iacute;a</li>
                                                </ul>
                                            </div>
                                            <p>Vivamus id tincidunt est. Suspendisse eu volutpat tellus. Etiam venenatis augue quis turpis efficitur congue. Suspendisse potenti. Sed sollicitudin vestibulum tincidunt. In euismod augue sed mauris bibendum, vel tempus eros dapibus. Integer a ipsum vehicula, dictum enim nec, interdum lectus.</p>
                                        </section>
                                        <section id="leon">
                                            <h3>Leon Zenglein</h3>
                                            <div class="data">
                                                <img class="borde-imagen" src="img/h1.jpg">
                                                <ul>
                                                    <li><strong>Edad:</strong> 21 a&ntilde;os</li>
                                                    <li><strong>Peso:</strong> 70 kg</li>
                                                    <li><strong>Altura:</strong> 1.67 m</li>
                                                    <li><strong>Ocupaci&oacute;n:</strong> Peleador</li>
                                                </ul>
                                            </div>
                                            <p>Vivamus id tincidunt est. Suspendisse eu volutpat tellus. Etiam venenatis augue quis turpis efficitur congue. Suspendisse potenti. Sed sollicitudin vestibulum tincidunt. In euismod augue sed mauris bibendum, vel tempus eros dapibus. Integer a ipsum vehicula, dictum enim nec, interdum lectus.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php include("includes/nav.php"); ?>
                </div>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
        <script src="resources/tabstyle/js/cbpFWTabs.js"></script>
        <script>
            (function() {
                [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                    new CBPFWTabs( el );
                });
            })();
        </script>
    </body>
</html>