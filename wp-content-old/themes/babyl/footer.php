    <section class="section">
        <br>
        <div class="container">
            <div class="">
                <div class="col-md-4 col-sm-6">
                    <div class="timeline-heading">
                        <h4 class="text-left">SOCIAL MEDIA</h4>
                    </div>
                    <ul class="list-inline social-buttons">
                        <li><a href="#" target="_blank"><i class="fa fa-2x fa-facebook"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-2x fa-instagram"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-2x fa-twitter"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-2x fa-linkedin"></i></a>
                        </li>
                    </ul>

                </div>
               <div class="col-md-4 col-sm-6">
                   <div class="timeline-heading">
                        <h4 class="text-left">OTHER INFO</h4>
                    </div>
                    <ul class="quicklinks">
                        <li><a href="http://localhost/babyl/news/" title="news">News</a></li>
                        <li><a href="http://localhost/babyl/careers/" title="Careers">Careers</a></li>
                        <li><a href="http://localhost/babyl/terms/" title="terms">Terms </a></li>
                        <li><a href="http://localhost/babyl/privacy/" title="Privacy policy">Privacy policy</a></li>
                        <li><a href="http://localhost/babyl/feedback/" title="Your Feedback">Your Feedback</a></li>
<!--
                        <li><a href="nhs" title="Disclaimer">NHS</a></li>
                        <li><a href="product" title="The service">The service</a></li>
                        <li><a href="what-we-treat" title="What we treat">What we treat</a></li>
                        <li><a href="faqs" title="faqs">FAQ</a></li>
-->
                   </ul>
                </div>
<!--
                <div class="col-md-3 col-sm-6">
                    <div class="timeline-heading">
                        <h4 class="text-left">CONTACT US</h4>
                    </div>
                    <ul class="quicklinks">
                        <li><a href="#" title="Our Skype Contacts">Twitter: @babylonrw</a>
                        </li>
                        <li><a href="#" title="Our Location">CBD Kigali - Rwanda</a>
                        </li>
                    </ul>
                </div>
-->
               <div class="col-md-4 col-sm-6">
                   <div class="timeline-heading">
                        <h4 class="text-left"><strong>Learn</strong> More</h4>
                    </div>
                   <ul class="quicklinks">
                        <li><a href="http://localhost/babyl/faqs/" title="faqs">FAQ</a></li>
                        <li><a href="http://localhost/babyl/faqs-kin-2/" title="faqs">FAQ Kin</a></li>
                        <li><a href="http://localhost/babyl/terms-kin/" title="terms">Terms Kin</a></li>
                        <li><a href="http://localhost/babyl/treat/" title="What we treat">What we treat</a></li>
                        <li><a href="http://localhost/babyl/pharmacies/" title="Pharmacies">Pharmacies</a></li>
                        <!-- <li><a href="http://localhost/babyl/hospitals/" title="faqs">Hospitals</a></li> -->
                       
<!--
                        <li><a href="ourmission" title="Our Mission">Mission</a></li>
                        <li><a href="yourfeedback" title="Your Feedback">Your Feedback</a></li>
                        <li><a href="privacy" title="Privacy policy">Privacy policy</a></li>
                        <li><a href="terms" title="terms">T&C’s </a></li>
-->

                    </ul>

                </div>
            </div>
        </div> 
        <br>
    </section>  
    <script src="<?php bloginfo('template_url'); ?>/js/animatedModal.min.js"></script>
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="//cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/plugins/lightslider/js/lightslider.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fittext.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/creative.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main-faqs.js"></script>
    <script type="text/javascript">jssor_1_slider_init();</script>

    <script>
        
    $(document).ready(function(){
        //demo 01
        $("#modal01").animatedModal({
            modalTarget:'modal-01',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });

        //demo 02
        $("#modal02").animatedModal({
            modalTarget:'modal-02',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
            // Callbacks
            beforeOpen: function() {
                console.log("The animation was called");
            },           
            afterOpen: function() {
                console.log("The animation is completed");
            }, 
            beforeClose: function() {
                console.log("The animation was called");
            }, 
            afterClose: function() {
                console.log("The animation is completed");
            }
        });
        //demo 01
        $("#modal03").animatedModal({
            modalTarget:'modal-03',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        $("#modal04").animatedModal({
            modalTarget:'modal-04',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        $("#modal05").animatedModal({
            modalTarget:'modal-05',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        $("#modal06").animatedModal({
            modalTarget:'modal-06',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
                    <?php 
                        $our_doctors_slug = get_option('our_doctors_slug');
                        global $post;
                        $args = array( 'numberposts' => 6, 'category_name' => $our_doctors_slug );
                        $posts = get_posts( $args );
                        foreach( $posts as $post ): setup_postdata($post); 
                        $postid = get_the_ID();

                    ?>
        $("#modal07<?php print $postid; ?>").animatedModal({
            modalTarget:'modal-07-<?php print $postid; ?>',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        <?php endforeach; ?>
        $("#modal08").animatedModal({
            modalTarget:'modal-08',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        $("#modal09").animatedModal({
            modalTarget:'modal-09',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        $("#modal10").animatedModal({
            modalTarget:'modal-10',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        $("#modal11").animatedModal({
            modalTarget:'modal-11',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        $("#modal12").animatedModal({
            modalTarget:'modal-12',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });
        $("#modal13").animatedModal({
            modalTarget:'modal-13',
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            color:'rgba(0,0,0,.76)',
        });

    });

    </script>
			
    <script>

            $( '.carousel-inner').find('.item:first' ).addClass( 'active' );

            $('.bxslider').bxSlider({
                minSlides: 1,
                maxSlides: 8,
                slideWidth: 219,
                slideMargin: 0,
                ticker: true,
                speed: 100000
            });
    </script>
			

	<?php wp_footer(); ?>
	<?php // print get_option('rba_analytics'); ?>
</body>

</html>