<?php
/*
* Template Name: termskin
*/
?>
<?php get_header(); ?>

<style type="text/css">
    body{
        background: #f1f2f2;
    }
</style>


    <section class="section section_header termskin header_bg">
        <div class="container">
            <h1 class="text-center">Amategeko n' amabwiriza</h1>
        </div>
    </section>
    
    <section>
    <div class="container" style="">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <div class="panel_customer margin_top">
                    <div class="panel_heading">
                    </div>
                    <div class="panel_body">
                        
                        <h2 class="text-center">Amabwiriza</h2>
                        <hr class="style-four">
                    <?php
                        global $post;
                        $post_slug=$post->post_name;
                        $page = get_page_by_title( $post_slug );
                        //$page = get_page_by_title( 'terms' );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;
                    ?>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 aside-left">
                <div class="panel_customer no_bg sub_menu_div">
                    <h4 class="list-title">About Us</h4>
                    <ul>
                         <li><a href="mission">OUR MISSION</a></li>
                        <li><a href="team"  class="active-link">OUR TEAM</a></li>
                        <li><a href="partners">OUR PARTNERS</a></li>
                        <li><a href="careers">CAREERS</a></li>
                        <li><a href="feedback">Your feedback</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
    </section>
    
    <section class="" style="background: ">
        <div class="container">
            <h2 class="text-center">GET THE APP</h2>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary"> -->
                    <a href="#"><img class="get-app" src="<?php print IMAGES; ?>/app-store.svg"></a>
                    <a href="#"><img class="get-app" src="<?php print IMAGES; ?>/google-play.svg"></a>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>

<?php
    require_once('modals.php');
    get_footer(); 
?>