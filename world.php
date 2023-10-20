<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <?php include("includes/head.php"); ?>
        <link rel="stylesheet" type="text/css" href="resources/tabstyle/css/tabs.css" />
	    <script src="resources/tabstyle/js/modernizr.custom.js"></script>
    </head>
    <body>
        <?php include("includes/fondo-img.php"); ?>
        <?php include("includes/header.php"); ?>
        <section class="inner">
            <div class="container">
                <div class="flex-box contenido">
                    <article class="fondo">
                        <div class="borde-juego">
                            <div class="tabs flex-box world-page">
                                <nav>
                                    <h2>Mundo</h2>
                                    <ul class="menu-world">
                                        <li><a href="#himalia">La Gran Alianza</a></li>
                                        <li><a href="#nations">Imperio de Helldur</a></li>
                                        <li><a href="#places">Culto de Azmodeo</a></li>
                                    </ul>
                                </nav>
                                <div class="world-container">
                                    <div class="content-wrap">
                                        <section id="himalia">
                                            <h3>La Gran Alianza</h3>
                                            <div id="scrolling-2" class="world-text texto-contenido">
                                            <p>Vivamus id tincidunt est. Suspendisse eu volutpat tellus. Etiam venenatis augue quis turpis efficitur congue. Suspendisse potenti. Sed sollicitudin vestibulum tincidunt. In euismod augue sed mauris bibendum, vel tempus eros dapibus. Integer a ipsum vehicula, dictum enim nec, interdum lectus.</p>
                                                <p>Vivamus id tincidunt est. Suspendisse eu volutpat tellus. Etiam venenatis augue quis turpis efficitur congue. Suspendisse potenti. Sed sollicitudin vestibulum tincidunt. In euismod augue sed mauris bibendum, vel tempus eros dapibus. Integer a ipsum vehicula, dictum enim nec, interdum lectus.</p>
                                                <div class="data">
                                                    <img class="borde-imagen" src="img/h1.jpg">
                                                    <ul>
                                                        <li><strong>Edad:</strong> 19 a&ntilde;os</li>
                                                        <li><strong>Peso:</strong> 65 kg</li>
                                                        <li><strong>Altura:</strong> 1.65 m</li>
                                                        <li><strong>Ocupaci&oacute;n:</strong> Infanter&iacute;a</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="nations">
                                            <h3>Imperio de Helldur</h3>
                                            <div id="scrolling-2" class="world-text texto-contenido">

                                                <p>Vivamus id tincidunt est. Suspendisse eu volutpat tellus. Etiam venenatis augue quis turpis efficitur congue. Suspendisse potenti. Sed sollicitudin vestibulum tincidunt. In euismod augue sed mauris bibendum, vel tempus eros dapibus. Integer a ipsum vehicula, dictum enim nec, interdum lectus.</p>
                                                <div class="data">
                                                    <img class="borde-imagen" src="img/h1.jpg">
                                                    <ul>
                                                        <li><strong>Edad:</strong> 19 a&ntilde;os</li>
                                                        <li><strong>Peso:</strong> 65 kg</li>
                                                        <li><strong>Altura:</strong> 1.65 m</li>
                                                        <li><strong>Ocupaci&oacute;n:</strong> Infanter&iacute;a</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="places">
                                            <h3>Culto de Azmodeo</h3>
                                            <div id="scrolling-2" class="world-text texto-contenido">

                                                <p>Vivamus id tincidunt est. Suspendisse eu volutpat tellus. Etiam venenatis augue quis turpis efficitur congue. Suspendisse potenti. Sed sollicitudin vestibulum tincidunt. In euismod augue sed mauris bibendum, vel tempus eros dapibus. Integer a ipsum vehicula, dictum enim nec, interdum lectus.</p>
                                                <div class="data">
                                                    <img class="borde-imagen" src="img/h1.jpg">
                                                    <ul>
                                                        <li><strong>Edad:</strong> 19 a&ntilde;os</li>
                                                        <li><strong>Peso:</strong> 65 kg</li>
                                                        <li><strong>Altura:</strong> 1.65 m</li>
                                                        <li><strong>Ocupaci&oacute;n:</strong> Infanter&iacute;a</li>
                                                    </ul>
                                                </div>
                                            </div>
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