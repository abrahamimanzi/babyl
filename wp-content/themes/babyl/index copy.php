<?php get_header(); ?>
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h2 style="color:#fff; letter-spacing: 4px;"><?php print get_option('homepage_title'); ?></h2>
            <h3 style="color:#fff"><?php print get_option('homepage_description'); ?></h3>
            <a href="<?php print get_option('homepage_appstore'); ?>" class="btn btn-primary btn-md page-scroll"><?php print get_option('fst_link_title'); ?></a>
            <a href="<?php print get_option('homepage_google_play'); ?>" class="btn btn-primary btn-md page-scroll"><?php print get_option('srd_link_title'); ?></a><br><br>
            <a href="<?php print get_option('homepage_howitwork'); ?>" class="btn btn-primary btn-md page-scroll"><?php print get_option('trd_link_title'); ?></a>
        </div>
    </div>
</header>
<div class="container text-center">
    <div class="section-title-area"><br>
        <h2 class="section-title"><?php print get_option('homepage_sec_2_title'); ?></h2><hr class="style-four"> 
        <p class="text-center"><?php print get_option('homepage_sec_2_desc'); ?></p> 
    </div>
    <h2 class="text-uppercase"><?php print get_option('homepage_sec_3_title'); ?></h2><hr>
    <p class="text-center"><?php print get_option('homepage_sec_3_desc'); ?></p>
</div>
<div class="text-center" id="btn-more">
    <a href="<?php print get_option('homepage_sec_3_link'); ?>" class="button bt2"><i class="fa fa-chevron-right"></i> <?php print get_option('homepage_sec_3_link_title'); ?></a>
</div>

    <section id="services" class="section-about section-padding onepage-section">
        
            <div class="container">
                <!-- <hr> -->
                <div class="section-title-area">
                    <h2 class="section-title"><?php print get_option('homepage_sec_4_title'); ?></h2><hr class="style-four">
                    <p class="text-center"><?php print get_option('homepage_sec_4_desc'); ?></p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6  wow slideInLeft" style="visibility: visible; animation-name: slideInUp;">
                        <div class="about-image"><img class="img img=responsive" src="<?php print IMAGES; ?>/Woman-on-Babylon.jpg"></div>
                        <div class="btm">
                            <h3 class="btm-title"><?php print get_option('homepage_serv_1_title'); ?></h3>
                            <p class="text-center"><?php print get_option('homepage_serv_1_desc'); ?></p><br>
                            <a id="modal01" href="<?php print get_option('homepage_serv_1_btn_link'); ?>"class="open_modal button bt1"><span class="lnr lnr-chevron-right"></span> <?php print get_option('homepage_serv_1_btn_title'); ?></a><br>
                        </div>
                        <!-- <hr> -->
                    </div>
                    
                    <div class="col-lg-4 col-sm-6  wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                        <div class="about-image"><img class="img img=responsive"  src="<?php print IMAGES; ?>/babylon-valley.jpg"></div>
                        <div class="btm">
                            <h3 class="btm-title"><?php print get_option('homepage_serv_2_title'); ?></h3>
                            <p class="text-center"><?php print get_option('homepage_serv_2_desc'); ?></p><br>
                            <a id="modal02" href="<?php print get_option('homepage_serv_2_btn_link'); ?>" class="open_modal button bt1"><i class="fa fa-chevron-right"></i> <?php print get_option('homepage_serv_2_btn_title'); ?></a>
                        </div>
                        <!-- <hr> -->
                    </div>
                    
                    <div class="col-lg-4 col-sm-6  wow slideInRight" style="visibility: visible; animation-name: slideInUp;">
                        <div class="about-image"><img class="img img=responsive"  src="<?php print IMAGES; ?>/product-7.jpg"></div>
                        <div class="btm">
                            <h3 class="btm-title"><?php print get_option('homepage_serv_3_title'); ?></h3>
                            <p class="text-center"><?php print get_option('homepage_serv_3_desc'); ?></p><br>
                            <a id="modal03" href="<?php print get_option('homepage_serv_3_btn_link'); ?>" class="open_modal button bt1"><i class="fa fa-chevron-right"></i> <?php print get_option('homepage_serv_3_btn_title'); ?></a>
                        </div>
                        <!-- <hr>     -->
                    </div>
                </div>
                
                <div class="row">
                    <div class="text-center"><br>
                        <hr class="style-eight"><br>    
                        <h3 class="text-center text-uppercase"><?php print get_option('homepage_quote'); ?></h3<br>
                        <hr class="style-eight"><br>
                    </div>
                </div>
                    
            </div>             
            
                
    </section>
    <section id="testimonies" class="sectionTestimonies">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                             <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <div class="profile">
                                      <img src="<?php print IMAGES; ?>/testimonial/Mobasher-Butt.jpg" class=" img img-responsive img-circle">
                                    </div>
                                </div>
                                  <div class="col-xs-8 col-sm-6">
                                      <p>
                                           Lorem ipsum dolor sit amet, velit felis, vel volutpat, quis adipiscing diam vitae pellentesque cumque.       
                Vitae turpis consequat adipiscing accumsan suspendisse duis. Quisque tortor mauris ligula nonummy nulla lacinia, faucibus porta at fusce parturient, dapibus sit a nulla, 
                                          <br>
                                          <br>
                                          <i>Pam, London</i>
                                      </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
					<?php
                        $testimonials = get_option('testimonials_slug');
						global $post;
						$args = array( 'numberposts' => 4, 'category_name' => $testimonials );
						$posts = get_posts( $args );
						foreach( $posts as $post ): setup_postdata($post); 

					?>
                <div class="item ">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                             <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                      <p>
                                           <?php echo wp_trim_words( get_the_content(), 12, '...' ); ?>
                                          <br>
                                          <br>
                                          <i><?php echo wp_trim_words( get_the_title(), 6, '...' ); ?></i>
                                      </p>
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                    <div class="profile">
<!--                                      <img src="<?php print IMAGES; ?>/testimonial/Mobasher-Butt.jpg" class=" img img-responsive img-circle">-->
                                        <?php 
                                            the_post_thumbnail('post-thumbnails', array( 'class'	=> "zoomer-class attachment-post-thumbnail img img-responsive img-circle"));
                                            //the_post_thumbnail( 'thumb-slide' ); 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                  <?php endforeach; ?>
                <div class="item ">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                             <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                      <p>
                                           Lorem ipsum dolor sit amet, velit felis, vel volutpat, quis adipiscing diam vitae pellentesque cumque.       
                Vitae turpis consequat adipiscing accumsan suspendisse duis. Quisque tortor mauris ligula nonummy nulla lacinia, faucibus porta at fusce parturient, dapibus sit a nulla, 
                                          <br>
                                          <br>
                                          <i>Pam, London</i>
                                      </p>
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                    <div class="profile">
                                      <img src="<?php print IMAGES; ?>/testimonial/Mobasher-Butt.jpg" class=" img img-responsive img-circle">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </section>
        
    <section id="doctors" class="section_doctors">
        <div class="container">
            <div class="section-title-area">
                <h2 class="section-title"><?php print get_option('our_doctors'); ?></h2><hr class="style-four">
                <p class="text-center"><?php print get_option('our_doctors_desc'); ?></p>
            </div>
            <ul id="doctorSlider" class="cS-hidden">
					<?php
                        $our_doctors_slug = get_option('our_doctors_slug');
						global $post;
						$args = array( 'numberposts' => 4, 'category_name' => $our_doctors_slug );
						$posts = get_posts( $args );
						foreach( $posts as $post ): setup_postdata($post); 
                        $postid = get_the_ID();

					?>
                <li class="light_item" data-thumb="">
                    <div class="overlay">
                        <div class="imgDiv">
                            <!-- <img src="<?php print IMAGES; ?>/Mobasher-Butt.jpeg" class="img img-responsive" alt=""> -->
                            <?php 
                                            the_post_thumbnail('thumb-hpdr', array( 'class'	=> "img img-responsive"));
                                            //the_post_thumbnail( 'thumb-slide' ); 
                                        ?>
                        </div>
                        <div class="caption text-center">
                            <a id="modal07<?php print $postid; ?>" href="#modal-07-<?php print $postid; ?>" class="open_modal pr-link text-center">
                                <span class="name"><?php echo wp_trim_words( get_the_title(), 6, '...' ); ?> <br></span>
                                <span class="read_more btn btn-primary"><i class=" fa fa-long-arrow-right" aria-hidden="true"></i> Profile</span>
                            </a>
                        </div>
                    </div>
                </li>
                
                    <?php endforeach; ?>
                <li class="light_item" data-thumb="">
                    <div class="overlay">
                        <div class="imgDiv">
                            <img src="<?php print IMAGES; ?>/Andrew+Roff.jpeg" class="img img-responsive" alt="">
                        </div>
                        <div class="caption text-center">
                            <a id="modal08" href="#modal-08" class="open_modal pr-link text-center">
                                <span class="name">Dr. John Don <br></span>
                                <span class="read_more btn btn-primary"><i class=" fa fa-long-arrow-right" aria-hidden="true"></i> Profile</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="light_item" data-thumb="">
                    <div class="overlay">
                        <div class="imgDiv">
                            <img src="<?php print IMAGES; ?>/Gary+Mudie.jpg" class="img img-responsive" alt="">
                        </div>
                        <div class="caption text-center">
                            <a id="modal09" href="#modal-09" class="open_modal pr-link text-center">
                                <span class="name">Dr. John Don <br></span>
                                <span class="read_more btn btn-primary"><i class=" fa fa-long-arrow-right" aria-hidden="true"></i> Profile</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="light_item" data-thumb="">
                    <div class="overlay">
                        <div class="imgDiv">
                            <img src="<?php print IMAGES; ?>/Mobasher-Butt.jpeg" class="img img-responsive" alt="">
                        </div>
                        <div class="caption text-center">
                            <a id="modal10" href="#modal-10" class="open_modal pr-link text-center">
                                <span class="name">Dr. John Don <br></span>
                                <span class="read_more btn btn-primary"><i class=" fa fa-long-arrow-right" aria-hidden="true"></i> Profile</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="light_item" data-thumb="">
                    <div class="overlay">
                        <div class="imgDiv">
                            <img src="<?php print IMAGES; ?>/Tracey+McNeill.jpg" class="img img-responsive" alt="">
                        </div>
                        <div class="caption text-center">
                            <a id="modal11" href="#modal-11" class="open_modal pr-link text-center">
                                <span class="name">Dr. John Don <br></span>
                                <span class="read_more btn btn-primary"><i class=" fa fa-long-arrow-right" aria-hidden="true"></i> Profile</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="light_item" data-thumb="">
                    <div class="overlay">
                        <div class="imgDiv">
                            <img src="<?php print IMAGES; ?>/Andrew+Roff.jpeg" class="img img-responsive" alt="">
                        </div>
                        <div class="caption text-center">
                            <a id="modal12" href="#modal-12" class="open_modal pr-link text-center">
                                <span class="name">Dr. John Don <br></span>
                                <span class="read_more btn btn-primary"><i class=" fa fa-long-arrow-right" aria-hidden="true"></i> Profile</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="light_item" data-thumb="">
                    <div class="overlay">
                        <div class="imgDiv">
                            <img src="<?php print IMAGES; ?>/Dr.-Martine-De-Couteau.png" class="img img-responsive" alt="">
                        </div>
                        <div class="caption text-center">
                            <a id="modal13" href="#modal-13" class="open_modal pr-link text-center">
                                <span class="name">Dr. John Don <br></span>
                                <span class="read_more btn btn-primary"><i class=" fa fa-long-arrow-right" aria-hidden="true"></i> Profile</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    
    <section class="section-services no-padding" id="about">
        <div class="container text-center">
            <div class="section-title-area">
                <h2 class="section-title"><?php print get_option('about_us'); ?></h2><hr class="style-four">
                <p class="text-center"><?php print get_option('about_us_desc'); ?></p>
            </div>
            <div class="row no-gutter"> 
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4 wow slideInLeft" style="visibility: visible; animation-name: slideInUp;">
                                <div class="panel panel-default">
                                    <div class="panel-body panel-bbln">
                                        <h3 class="text-center"><?php print get_option('homepage_vision_mission'); ?></h3>
                                        <img class="img img=responsive" src="<?php print get_option('homepage_vision_mission_img'); ?>"><hr class="style-four">
                                        <p class="text-center"><?php print get_option('homepage_vision_mission_desc'); ?></p><br>
                                        <a id="modal04" href="<?php print get_option('homepage_vision_mission_btn_link'); ?>" class="open_modal button bt2"><i class="fa fa-chevron-right"></i> <?php print get_option('homepage_vision_mission_btn'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                                <div class="panel panel-default">
                                    <div class="panel-body panel-bbln">
                                        <h3 class="text-center"><?php print get_option('homepage_our_team'); ?></h3>
                                        <img class="img img=responsive" src="<?php print get_option('homepage_our_team_img'); ?>"><hr class="style-four">
                                        <p class="text-center"><?php print get_option('homepage_our_team_desc'); ?></p><br>
                                        <a  id="modal05" href="<?php print get_option('homepage_our_team_btn_link'); ?>" class="open_modal button bt2"><i class="fa fa-chevron-right"></i> <?php print get_option('homepage_our_team_btn'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 wow slideInRight" style="visibility: visible; animation-name: slideInUp;">
                                <div class="panel panel-default">
                                    <div class="panel-body panel-bbln">
                                        <h3 class="text-center"><?php print get_option('homepage_our_partners'); ?></h3>
                                        <img class="img img=responsive" src="<?php print get_option('homepage_our_partners_img'); ?>"><hr class="style-four">
                                        <p class="text-center"><?php print get_option('homepage_our_partners_desc'); ?></p><br>
                                        <a  id="modal06" href="<?php print get_option('homepage_our_partners_btn_link'); ?>" class="open_modal button bt2"><i class="fa fa-chevron-right"></i> <?php print get_option('homepage_our_partners_btn'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
        </div>
    </section>
        
    
    <div id="Section-Contact">
        <section id="sectionContact" class="section-aboutus">
            <div class="container">
                <div class="row no-gutter">
                    <div class="container">
                        <h2 class="text-center"><?php print get_option('homepage_contact_us'); ?></h2>
                        <div class="col-md-12">
                            <p class="text-center">
                                <?php print get_option('homepage_contact_us_desc'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




	





<?php
    require_once('modals.php');
    get_footer(); 
?>