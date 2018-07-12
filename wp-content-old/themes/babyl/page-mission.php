<?php
/*
* Template Name: Mission
*/
?>
<?php get_header(); ?>
    <style type="text/css">
        body{
            background-color: #f1f2f2;
        }
    </style>

    <section class="section section_header mission header_bg">
        <div class="container">
            <h1 class="text-center">Our Mission</h1>
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
                        <div class="img_div text-center">
                            <img class="img img-responsive img-rounded" src="<?php print IMAGES; ?>/ourmission.jpeg" alt="">
                        </div>
                        <h2 class="text-center">Our Mission</h2>
                        <hr class="style-four">
                    <?php
                        global $post;
                        $post_slug=$post->post_name;
                        $page = get_page_by_title( $post_slug );
                        //$page = get_page_by_title( 'terms' );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;
                    ?>
                        <!-- <h2 class="text-center">Our Mission</h2>
                        <hr class="style-four">
                        <p class="gray-color pr-text-2">Being ill is difficult enough, getting healthcare shouldn’t be.</p>
                        <p class="gray-color pr-text-2">For many of us getting access to healthcare can be inconvenient or costly. But for some, the problem is more serious: almost 50% of the global population has little access to quality healthcare.</p>
                        <p class="gray-color pr-text-2">Yet irrespective of where we live, most of us have a mobile phone in our pocket. Our mobiles are getting smarter every year: mobile phones today are a thousand times more capable than they were only 10 years ago and they will be at least a thousand times more powerful in the next ten years. Can you imagine the possibilities?</p>
                        <p class="gray-color pr-text-2">babylon combines the latest technology with the knowledge and experience of the best doctors to make healthcare simpler, better, and more accessible and affordable for people everywhere.</p>
                        <p class="gray-color pr-text-2">Our goal is to help people around the globe live happier, healthier lives. We have started with United Kingdom, launched in Ireland, and we will soon start providing services to the whole population of an East African nation. Hopefully, that’s just the start.</p>
                        <p class="gray-color pr-text-1"><strong>At babylon we are creating everyone’s personal health service.</strong></p>
                        <h1 class="quotation">"</h1>
                        <p>“When we see how much can be done with existing technology, to improve access to healthcare for people everywhere, we ask ourselves two simple questions: if not us, then who? If not now, then when? There are no excuses for not trying…”</p>
                        <p>— Dr. Ali Parsa, Founder And CEO Of Babylon Health</p> -->
                        <br>
                        <br>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 aside-left">
                <div class="panel_customer no_bg sub_menu_div">
                    <h4 class="list-title">About Us</h4>
                    <ul>
                        <li><a href="mission" class="active-link">OUR MISSION</a></li>
                        <li><a href="team">OUR TEAM</a></li>
                        <li><a href="partners">OUR PARTNERS</a></li>
                        <li><a href="careers">CAREERS</a></li>
                        <li><a href="feedback">Your feedback</a></li>
                        <!-- <li><a href="#">NEWS</a></li>
                        <li><a href="#">BLOG</a></li> -->
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