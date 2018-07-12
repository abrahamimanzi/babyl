<?php
/*
* Template Name: News
*/
?>
<?php get_header(); ?>
    <style type="text/css">
        body{
            background-color: #f1f2f2;
        }
    </style>

    <section class="section section_header news header_bg">
        <div class="container">
            <h1 class="text-center">Our News</h1>
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
                        
                        <h2 class="text-center">Features</h2>
                        <hr class="style-four">
                        
                    <ul class="list-unstyled">
                    <?php 
                        /*------------------------------------------------------------------*/
                        /* link of making pagination in wordpress                           */
                        /* http://callmenick.com/post/custom-wordpress-loop-with-pagination */
                        /*------------------------------------------------------------------*/
                        global $custom_query;
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

                        $custom_args = array(
                            'post_type' => 'post',
                            'category_name' => 'news',
                            'posts_per_page' => 12,
                            'paged' => $paged
                        );

                        $custom_query = new WP_Query( $custom_args ); ?>

                        <?php if ( $custom_query->have_posts() ) : ?>

                        <!-- the loop -->
                        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                        <li>
                            <div class="row">
                                <div class="col-sm-5 col-md-4 col-lg-5 col-ipad-6">
                                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-list' ); ?>
                                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="img-thumbnail pull-left noborder-ra" width="250" height="143">
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-7 col-md-8 col-lg-7 col-ipad-6">
                                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                    <p><?php echo wp_trim_words( get_the_content(), 40, '... ' ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="r-m">Read more >></a>
                                </div>
                            </div>
                        </li>
                        <?php //endforeach; ?>
                        <?php endwhile; ?>
                            <!-- pagination here -->
                            <?php
                                if (function_exists(custom_pagination)) {
                                    custom_pagination($custom_query->max_num_pages,"",$paged);
                                }
                            ?>

                            <?php wp_reset_postdata(); ?>

                            <?php else:  ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </ul>
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
                            <li><a href="careers" >CAREERS</a></li>
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
   