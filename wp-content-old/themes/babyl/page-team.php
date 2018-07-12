<?php
/*
* Template Name: Team
*/
?>
<?php get_header(); ?>
    <style type="text/css">
        body{
            background-color: #f1f2f2;
        }
    </style>



    <section class="section section_header team header_bg">
        <div class="container">
            <h1 class="text-center" style="margin: 150px 0px 0px 0px;">Our Team</h1>
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
                        
                        <h2 class="text-center">Our Team</h2>
                        <hr class="style-four">
                    <?php
                        global $post;
                        $post_slug=$post->post_name;
                        $page = get_page_by_title( $post_slug );
                        //$page = get_page_by_title( 'terms' );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;
                    ?>
                        
                        <!-- <p class="gray-color pr-text-2 text-center">Being ill is difficult enough, getting healthcare shouldn’t be For many of us getting access to healthcare can be inconvenient or costly. But for some, the problem is more serious: almost 50% of the global population has little access to quality healthcare.</p> -->
                        </br>
                        </br>
                        <div class="row">
                            <?php
                                $our_doctors_slug = get_option('our_doctors_slug');
                                global $post;
                                $args = array( 'numberposts' => 6, 'category_name' => 'our-team' );
                                $posts = get_posts( $args );
                                foreach( $posts as $post ): setup_postdata($post); 
                                $postid = get_the_ID();

                            ?>
                            <div class="col-md-4">
                                <?php 
                                    the_post_thumbnail('thumb-team', array( 'class' => "img-responsive img-rounded"));
                                    //the_post_thumbnail( 'thumb-slide' ); 
                                ?>
                                <!-- <img src="img/Ali+Parsa.jpg" class="img-responsive img-rounded"> -->
                                <div class="text-align-center">
                                    <a href="#" class="pr-link text-align-center"><h3><?php the_title(); ?></h3></a>
                                    <h4 class="gray-color"><?php echo wp_trim_words( get_the_content(), 40, ' ' ); ?></h4>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- <div class="col-md-4">
                                <img src="img/Tracey+McNeill.jpg" class="img-responsive img-rounded">
                                <div class="text-align-center">
                                    <a href="#" class="pr-link text-align-center"><h3>Tracey McNeill</h3></a>
                                    <h4 class="gray-color">Chief Clinical Officer</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="img/Gary+Mudie.jpg" class="img-responsive img-rounded">
                                <div class="text-align-center">
                                    <a href="#" class="pr-link text-align-center"><h3>Gary Mudie</h3></a>
                                    <h4 class="gray-color">Chief Technology Officer</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="img/Rabin+Yaghoubi.png" class="img-responsive img-rounded">
                                <div class="text-align-center">
                                    <a href="#" class="pr-link text-align-center"><h3>Rabin Yaghoubi</h3></a>
                                    <h4 class="gray-color">Chief Commercial Officer</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="img/Andrew+Roff.jpeg" class="img-responsive img-rounded">
                                <div class="text-align-center">
                                    <a href="#" class="pr-link text-align-center"><h3>Andrew Roff</h3></a>
                                    <h4 class="gray-color">Finance Director</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="img/Mobasher-Butt.jpeg" class="img-responsive img-rounded">
                                <div class="text-align-center">
                                    <a href="#" class="pr-link text-align-center"><h3>Dr. Mobasher Butt</h3></a>
                                    <h4 class="gray-color">Chief Commercial Officer</h4>
                                </div>
                            </div> -->
                        </div>
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