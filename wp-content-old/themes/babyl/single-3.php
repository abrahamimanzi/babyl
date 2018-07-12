<?php get_header(); ?>

    <!-- Page Content -->
    <section class="term">
        <div class="container">
                
				
			<div class="col-sm-16">
				<div class="row nomargin-left">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-12 col-sm-6 col-ipad-12 wow fadeInLeft animated science animated" data-wow-delay="0.5s" data-wow-offset="130" style="visibility: visible; -webkit-animation-delay: 0.5s;">
						<div class="row  border-bottom nomargin-left ne-bo-margin nomargin-right">
							<div class="title-main">story</div>
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


