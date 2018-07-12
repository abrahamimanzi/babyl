<?php get_header(); ?>

    <!-- Page Content -->
    <section class="term">
        <div class="container">
                
				<div class="col-md-12 col-sm-12 col-xs-12 col-ipad-12">
					<ul class="list-unstyled">
        				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>
							<div class="row">
								<div class="col-sm-5 col-md-4 col-lg-5 col-ipad-6">
									<?php if (has_post_thumbnail( $post->ID ) ): ?>
  									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-list' ); ?>
									<img class="img-thumbnail pull-left noborder-ra" src="<?php echo $image[0]; ?>"  width="250" height="143" alt="<?php the_title(); ?>">
									<?php endif; ?>
								</div>
								<div class="col-sm-7 col-md-8 col-lg-7 col-ipad-6">
									<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
									<p>	<?php echo wp_trim_words( get_the_content(), 40, '... ' ); ?>
										<?php /*the_content('Read More...');*/ ?>
									</p>
									<a href="<?php the_permalink(); ?>" class="r-m">Read more >></a>
								</div>
							</div>
						</li>
						<?php endwhile; else: ?>
							<p><?php _e('No posts were found. Sorry!'); ?></p>
						<?php endif; ?>
                    </ul>
            </div>
				
            
                    <?php/*
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
            */?>

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


