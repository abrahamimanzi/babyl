<?php
/*
* Template Name: News
*/
?>
<?php get_header(); ?>

    <!-- Page Content -->
    <section class="term">
        <div class="container">
            
                <div class="row nomargin-left">
                    <div class="col-md-2" style="text-align: center;">
                    </div>
                    <div class="col-md-8" style="text-align: center;">
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
                    </div>
                </div>
                <div class="row nomargin-left">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-12 col-sm-12 col-ipad-12 wow fadeInLeft animated science animated" data-wow-delay="0.5s" data-wow-offset="130" style="visibility: visible; -webkit-animation-delay: 0.5s;">
						<div class="row  border-bottom nomargin-left ne-bo-margin nomargin-right">
							<div class="title-main"><?php the_title(); ?></div>
						</div>
						<div class="row nomargin-side sm-p-right">
							<div class="topic col-sm-16  border-bottom">
								<h3><?php the_title(); ?></h3>
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-post' ); ?>
								
								<a href="#">
									<img class=" img-thumbnail noborder-ra" src="<?php echo $image[0]; ?>" width="100%" height="227" alt="<?php bloginfo('name'); ?>">
									<h3> Lorem ipsum dolor sit amet, consecte</h3>
								</a>
								<?php endif; ?>
								<p class="info-p-bo"><?php the_content('Read More...'); ?></p>
							</div>
						</div>
					</div>
			        <div class="navi">
			            <div class="right">
			                <?php previous_post_link(); ?> / <?php next_post_link('Next'); ?>
			            </div>
			        </div>
			        <?php endwhile; else: ?>
			            <p><?php _e('No posts were found. Sorry!'); ?></p>
			        <?php endif; ?>
					
				</div>
            
            <!-- Heading Row -->
            <div class="row" style="text-align: center;">

                <!-- /.col-md-4 -->
                <div class="col-md-2" style="text-align: center;">
                </div>
                <div class="col-md-8" style="text-align: center;">
                    <?php
                        global $post;
                        $post_slug=$post->post_name;
                        $page = get_page_by_title( $post_slug );
                        //$page = get_page_by_title( 'terms' );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;
                    ?>
                    <p class="gray-color pr-text-2"></p><br>

                    <a href="#top" class="cd-top cd-is-visible cd-fade-out">Top</a>
                </div>
                <!-- <div class="col-md-2">
                </div> -->
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->


        </div>
    </section>
    <!-- /.container -->

    <script type="text/javascript">
        $(document).on('click', '.dalink', function () {
            var id = (this.id);
            var togo = ("#on"+id);
            $(togo).css({"padding-top": "100px"});
            $('html, body').animate({
                scrollTop: $(togo).offset().top
            }, 2000);
        });
        $("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
        $("#whatWeDoMenu").click(function() {
            $('html, body').animate({
                scrollTop: $("#whatWeDo").offset().top
            }, 2000);
        });
        $("#governingMenu").click(function() {
            $('html, body').animate({
                scrollTop: $("#governing").offset().top
            }, 2000);
        });
        $("#ICPARLowMenu").click(function() {
            $('html, body').animate({
                scrollTop: $("#ICPARLow").offset().top
            }, 2000);
        });
        $("#membershipMenu").click(function() {
            $('html, body').animate({
                scrollTop: $("#membership").offset().top
            }, 2000);
        });
    </script>


<?php
    require_once('modals.php');
    get_footer(); 
?>


