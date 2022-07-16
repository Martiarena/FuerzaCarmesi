<head>
    <meta charset="utf-8">
    <title>Fuerza Carmes&iacute; | Fantasy RPG</title>
    <link href="css/estilo.css" type="text/css" rel="stylesheet">
    <script src="resources/fancybox/lib/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="resources/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="resources/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
    </script>
    <script type="text/javascript" src="resources/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox-media').attr('rel', 'media-gallery').fancybox({
                openEffect : 'none',
                closeEffect : 'none',
                prevEffect : 'none',
                nextEffect : 'none',
                closeBtn   : false,
                padding : 0,
            
                arrows : false,
                helpers : {
                    media : {},
                    buttons : {}
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            
            var pull		= $('#mmovil');
                menu		= $('.menu-principal ul');
                menuHeight	= menu.height();
                
            $(pull).on('click',function(e){
                e.preventDefault();
                menu.slideToggle();			
            });
            
            $(window).resize(function(){
                var w = $(window).width();
                if(w>768 && menu.is(':hidden')){
                    menu.removeAttr('style');	
                }
            });
            
        });
    </script>
    <style type="text/css">
    .fancybox-type-iframe.fancybox-opened .fancybox-skin {
        border-style: solid;
        border-width: 14px;
        -moz-border-image: url(img/border-fc-beat-em-up-openbor-indie-game.png) 7;
        -webkit-border-image: url(img/border-fc-beat-em-up-openbor-indie-game.png) 7;
        -o-border-image: url(img/border-fc-beat-em-up-openbor-indie-game.png) 7;
        border-image: url(img/border-fc-beat-em-up-openbor-indie-game.png) 7;
    }
    </style>
</head>