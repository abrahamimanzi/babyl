<!DOCTYPE html>
<?php // include ("inc/writeUrl.php"); ?>
<!--[if IE 8]>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="keywords" content="Online Doctor Consultations &amp; Advice - babyl Health" />
        <meta name="description" content="Online Doctor Consultations &amp; Advice - babyl Health" />
        <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="shortcut icon" href="<?php print IMAGES; ?>/favicon.png" />
        <link rel="apple-touch-icon" href="<?php print IMAGES; ?>/favicon.png"/>
        <?php wp_head(); ?>
    <!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php bloginfo('template_url'); ?>/js/jssor.slider-21.1.6.min.js"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
    </style>
        
        <style>
            #doctorSlider .cS-hidden{
                display: none;
            }
            #doctorSlider img{
                border-radius: 5px;
            }

        </style>
        <script type="text/javascript">
            // $(document).ready(function(){
            //     $('#doctorSlider').lightSlider({
            //         item:5 ,
            //         loop:true,
            //         auto: true,
            //         useCSS: true,
            //         keyPress: true,
            //         controls: true,
            //         freeMove:true,
            //         enableTouch:true,
            //         enableDrag:true,
            //         pager: false,
            //         swipeThreshold: 40,
            //         slideMove:1,
            //         speed: 2000, //ms'
            //         slideEndAnimation: true,
            //         pause: 5000,
            //         responsive : [
            //             {
            //                 breakpoint:800,
            //                 settings: {
            //                     item:3,
            //                     slideMove:1,
            //                     slideMargin:6,
            //                   }
            //             },
            //             {
            //                 breakpoint:480,
            //                 settings: {
            //                     item:2,
            //                     slideMove:1
            //                   }
            //             }
            //         ],
            //         onBeforeStart: function (el) {
            //             },
            //         onSliderLoad: function (el) {
            //             $('#doctorSlider').removeClass('cS-hidden');},
            //     });  
            // });
        </script>
    <script src="<?php bloginfo('template_url'); ?>/js/modernizr-faqs.js"></script>
    </head>
<body id="home">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top nav-bgr <?php if($page!='Home'){ echo 'other';}?>">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php print IMAGES; ?>/babyl.svg"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php //wp_nav_menu( array('nav' => 'Main', 'container' => 'nav ','menu_class' =>'collapse navbar-collapse', 'menu_id' => 'bs-example-navbar-collapse-1' )); ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php 
                    wp_nav_menu( array ('ul' => 'Main', 'container' => 'ul ','menu_class' =>'nav navbar-nav navbar-right', ));
                ?>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    

