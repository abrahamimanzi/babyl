<?php get_header(); ?>
    <style type="text/css">
        body{
            background-color: #f1f2f2;
        }
    </style>

    <section class="section section_header partners header_bg">
        <div class="container">
            <!-- <h1 class="text-center">Our Story</h1> -->
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
                        
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h2 class="text-center"><?php the_title(); ?></h2>
                        <hr class="style-four">
                        
                    
                <div class="row nomargin-left">
                    <div class="col-lg-12 col-sm-6 col-ipad-12 wow fadeInLeft animated science animated" data-wow-delay="0.5s" data-wow-offset="130" style="visibility: visible; -webkit-animation-delay: 0.5s;">
                        <div class="row  border-bottom nomargin-left ne-bo-margin nomargin-right">
                            <div class="title-main"></div>
                        </div>
                        <div class="row nomargin-side sm-p-right">
                            <div class="topic col-sm-16  border-bottom">
                                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-post' ); ?>
                                
                                <a href="#">
                                    <img class=" img-thumbnail noborder-ra" src="<?php echo $image[0]; ?>" width="100%" height="227" alt="<?php bloginfo('name'); ?>">
                                    <!-- <h3> Lorem ipsum dolor sit amet, consecte</h3> -->
                                </a>
                                <?php endif; ?>
                                <p class="info-p-bo"><?php the_content('Read More...'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="navi">
                        <div class="right">
                <span><?php previous_post_link('%link', '<< Previous article', TRUE); ?></span>  
                <span style="display: inline-block; float: right "><?php next_post_link('%link', 'Next article >>', TRUE); ?></span>
                        </div>
                    </div>
                    <?php endwhile; else: ?>
                        <p><?php _e('No posts were found. Sorry!'); ?></p>
                    <?php endif; ?>
                    
                </div>
                        <!-- <p class="gray-color pr-text-2">babylon partners with a broad range of employers, healthcare providers, insurance companies, telecom companies, technology leaders and other businesses. Through these partnerships we deliver access to our comprehensive on-demand healthcare service to employees, clients and customers.</p>
                        <p class="gray-color pr-text-2">Please contact us:  <a href="#" class="pr-link">partnerships@babylonhealth.com</a></p>
                        <p class="green-color pr-text-3">Benefits of partnering with babylon include:</p><br> -->
                
                        <div class="row">

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
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Primary Sidebar') ) : ?>

                <?php endif; ?>
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
   