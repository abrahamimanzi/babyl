<?php
/*
* Template Name: privacy
*/
?>
<?php get_header(); ?>

    <section class="section section_header privacy header_bg">
        <div class="container">
            <!-- <h1 class="text-center">PRIVACY POLICY</h1> -->
        </div>
    </section>
    
    <section>
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <div class="panel_customer margin_top">
                    <div class="panel_heading">
                    </div>
                    <div class="panel_body">
                        
                        <h2 class="text-center">PRIVACY POLICY</h2>
                        <hr class="style-four">
                        
                    <?php
                        global $post;
                        $post_slug=$post->post_name;
                        $page = get_page_by_title( $post_slug );
                        //$page = get_page_by_title( 'terms' );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;
                    ?>
                        <!-- <p class="gray-color pr-text-2">babylon partners with a broad range of employers, healthcare providers, insurance companies, telecom companies, technology leaders and other businesses. Through these partnerships we deliver access to our comprehensive on-demand healthcare service to employees, clients and customers.</p>
                        <p class="gray-color pr-text-2">Please contact us:  <a href="#" class="pr-link">partnerships@babylonhealth.com</a></p>
                        <p class="green-color pr-text-3">Benefits of partnering with babylon include:</p><br> -->
                
                        <div class="row">
                            <!-- <div class="col-md-4">
                                <img src="img/patnerspagebuttons-53.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="img/patnerspagebuttons-54.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="img/patnerspagebuttons-55.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-12"><br></div>
                            <div class="col-md-4">
                                <img src="img/patnerspagebuttons-A-53.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="img/patnerspagebuttons-A-54.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="img/patnerspagebuttons-58.png" class="img-responsive img-rounded">
                            </div> -->

                            <br>
                            <br>
                        </div>
                            <br>
                            <br>
                            <br>
                            <br>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 aside-left">
                <div class="panel_customer no_bg sub_menu_div">
                    <h4 class="list-title">About Us</h4>
                    <ul>
                        <li><a href="mission">OUR MISSION</a></li>
                            <li><a href="team" >OUR TEAM</a></li>
                            <li><a href="partners" class="active-link">OUR PARTNERS</a></li>
                            <li><a href="pharmacies" >PHARMACIES</a></li>
                            <li><a href="careers" >CAREERS</a></li>
                            <li><a href="terms">TERMS</a></li>
                            <li><a href="terms-kin">TERMS KIN</a></li>
                            <li><a href="voucher">VOUCHER</a></li>
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
                    <!-- <a href="#"><img class="get-app" src="<?php print IMAGES; ?>/app-store.svg"></a> -->
                    <a href="<?php print get_option('homepage_google_play'); ?>"><img class="get-app" src="<?php print IMAGES; ?>/google-play.svg"></a> 
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
   