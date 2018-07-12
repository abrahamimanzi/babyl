<?php
/*
* Template Name: Vision
*/
?>
<?php get_header(); ?>

    <section class="section section_header partners header_bg">
        <div class="container">
            <h1 class="text-center">Vision & Mission</h1>
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
                        
                        <h2 class="text-center">Vision & Mission</h2>
                        <hr class="style-four">
                        
                    <?php
                        global $post;
                        $post_slug=$post->post_name;
                        $page = get_page_by_title( $post_slug );
                        //$page = get_page_by_title( 'terms' );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;
                    ?>
                        <p class="gray-color pr-text-2">babylon partners with a broad range of employers, healthcare providers, insurance companies, telecom companies, technology leaders and other businesses. Through these partnerships we deliver access to our comprehensive on-demand healthcare service to employees, clients and customers.</p>
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
                         <div class="row" id="partners-logo">
                            <!-- <div class="col-md-12">
                                <br>
                                <h4><strong class="green-color">Corporate Partners</strong></h4>
                                <p class="gray-color pr-text-2">Some of babylon's corporate partners include:</p>
                             </div> -->
                            <div class="col-md-12"><br></div>
                            <?php
                                $our_doctors_slug = get_option('our_doctors_slug');
                                global $post;
                                $args = array( 'numberposts' => 4, 'category_name' => 'our-partners' );
                                $posts = get_posts( $args );
                                foreach( $posts as $post ): setup_postdata($post); 
                                $postid = get_the_ID();

                            ?>
                            <div class="col-md-2">
                                <!-- <img src="img/aviva.png" class="img-responsive img-rounded"> -->
                                <?php 
                                    the_post_thumbnail('thumb-partner', array( 'class' => "img-responsive img-rounded"));
                                    //the_post_thumbnail( 'thumb-slide' ); 
                                ?>
                            </div>
                            <?php endforeach; ?>
                            <!-- <div class="col-md-2">
                                <img src="img/bny-mellon-logo.jpeg" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/bt.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/BUPA.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/capita-logo.png" class="img-responsive img-rounded">
                            </div> -->
                            <!-- <div class="col-md-2">
                                <img src="img/patnerspagebuttons-55.png" class="img-responsive img-rounded">
                            </div> -->
                            <div class="col-md-12"><br></div>
                            <!-- <div class="col-md-2">
                                <img src="img/2000px-Garmin_logo.svg.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/Markit-Logo-Official.jpeg" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/mercer.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/Jawbone_logo.jpg" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/linkedin.png" class="img-responsive img-rounded">
                            </div> -->
                            <!-- <div class="col-md-2">
                                <img src="img/patnerspagebuttons-55.png" class="img-responsive img-rounded">
                            </div> -->
                            <div class="col-md-12"><br></div>
                            <!-- <div class="col-md-2">
                                <img src="img/3-brand.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/palantir-logo.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/rocketfuel.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/sky-bet.png" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-2">
                                <img src="img/samsung-logo.png" class="img-responsive img-rounded">
                            </div> -->
                            <!-- <div class="col-md-2">
                                <img src="img/patnerspagebuttons-54.png" class="img-responsive img-rounded">
                            </div> -->
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
                        <li><a href="our-mission">OUR MISSION</a></li>
                            <li><a href="our-team" >OUR TEAM</a></li>
                            <li><a href="partners" class="active-link">OUR PARTNERS</a></li>
                            <li><a href="careers" >CAREERS</a></li>
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
                    <a href="#"><img class="get-app" src="img/Download_on_the_App_Store_Badge_US-UK_187.png"></a>
                    <a href="#"><img class="get-app" src="img/english_get.png"></a> 
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
   