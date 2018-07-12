<?php
/*
* Template Name: Feedback
*/
?>
<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

    //Check to see if the honeypot captcha field was filled in
    if(trim($_POST['checking']) !== '') {
        $captchaError = true;
    } else {
    
        //Check to make sure that the name field is not empty
        if(trim($_POST['contactName']) === '') {
            $nameError = 'You forgot to enter your name.';
            $hasError = true;
        } else {
            $name = trim($_POST['contactName']);
        }
        
        //Check to make sure sure that a valid email address is submitted
        if(trim($_POST['email']) === '')  {
            $emailError = 'You forgot to enter your email address.';
            $hasError = true;
        } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
            $emailError = 'You entered an invalid email address.';
            $hasError = true;
        } else {
            $email = trim($_POST['email']);
        }
            
        //Check to make sure comments were entered  
        if(trim($_POST['comments']) === '') {
            $commentError = 'You forgot to enter your comments.';
            $hasError = true;
        } else {
            if(function_exists('stripslashes')) {
                $comments = stripslashes(trim($_POST['comments']));
            } else {
                $comments = trim($_POST['comments']);
            }
        }
            
        //If there is no error, send the email
        if(!isset($hasError)) {

            $emailTo = 'abraham@cube.rw';
            $subject = 'Contact Form Submission from '.$name;
            $sendCopy = trim($_POST['sendCopy']);
            $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
            $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
            
            mail($emailTo, $subject, $body, $headers);

            if($sendCopy == true) {
                $subject = 'You emailed Your Name';
                $headers = 'From: Your Name <abraham@cube.rw>';
                mail($email, $subject, $body, $headers);
            }

            $emailSent = true;

        }
    }
} ?>
<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact-form.js"></script>
    <style type="text/css">
        body{
            background-color: #f1f2f2;
        }
    </style>



    <section class="section section_header feedback header_bg">
        <div class="container">
            <h1 class="text-center" style="margin: 150px 0px 0px 0px;">Your feedback</h1>
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
                        
                        <h2 class="text-center">Give us your feedback</h2>
                        <hr class="style-four">
                        
                        <!-- <p class="gray-color pr-text-2 text-center">Being ill is difficult enough, getting healthcare shouldn’t be For many of us getting access to healthcare can be inconvenient or costly. But for some, the problem is more serious: almost 50% of the global population has little access to quality healthcare.</p> -->
                        </br>
                        </br>
                        <div class="row">
                        <?php if(isset($emailSent) && $emailSent == true) { ?>

                            <div class="thanks">
                                <h1>Thanks, <?=$name;?></h1>
                                <p>Your email was successfully sent. I will be in touch soon.</p>
                            </div>

                        <?php } else { ?>

                            <?php if (have_posts()) : ?>
                            
                            <?php while (have_posts()) : the_post(); ?>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                
                                <?php if(isset($hasError) || isset($captchaError)) { ?>
                                    <p class="error">There was an error submitting the form.<p>
                                <?php } ?>
                            <form action="<?php the_permalink(); ?>" id="contactForm" method="post" name="sentMessage" novalidate="" class="ng-pristine ng-valid">
                                <!-- <h2 style="text-align: center;"><strong>Give us your feedback</strong></h2> -->
                                <div class="control-group form-group">
                                    <div class="controls">
        <!--                                                    <label>Full Name:</label>-->
                                        <input name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField form-control" type="text" placeholder="Full Name"  required="" data-validation-required-message="Please enter your name." aria-invalid="false">
                                        <?php if($nameError != '') { ?>
                                            <span class="error"><?=$nameError;?></span> 
                                        <?php } ?>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
        <!--                            <label>Phone Number:</label>-->
                                        <input name="subject" type="tel" placeholder="Phone Number" class="form-control" id="phone" required="" data-validation-required-message="Please enter your phone number." aria-invalid="false">
                                    <div class="help-block"></div></div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
        <!--                            <label>Email Address:</label>-->
                                        <input name="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" type="email" placeholder="Email Address" class="form-control" id="email" required="" data-validation-required-message="Please enter your email address." aria-invalid="false">
                                        <?php if($emailError != '') { ?>
                                            <span class="error"><?=$emailError;?></span>
                                        <?php } ?>
                                    <div class="help-block"></div></div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
        <!--                            <label>Message:</label>-->
                                        <textarea name="comments" id="commentsText" placeholder="Your Message:" rows="10" cols="100" class="form-control" required="" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none;background-color: #f2f2f2;" aria-invalid="false"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                                        <?php if($commentError != '') { ?>
                                            <span class="error"><?=$commentError;?></span> 
                                        <?php } ?>
                                    <div class="help-block"></div></div>
                                </div>
                                <div id="success"></div>
                
                                <!-- For success/fail messages -->
                                <div class="control-group form-group">
                                    <div class="controls">
        <!--                            <label>Message:</label>-->
                                        <input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> />
                                        <label for="sendCopy">Send a copy of this email to yourself</label>
                                    <div class="help-block"></div></div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
        <!--                            <label>Message:</label>-->
                                        <label for="checking" class="screenReader">If you want to submit this form, do not enter anything in this field</label>
                                        <input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
                                    <div class="help-block"></div></div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
        <!--                            <label>Message:</label>-->
                                        <input type="hidden" name="submitted" id="submitted" value="true" /><button class="btn btn-primary" type="submit">SEND MESSAGE &raquo;</button>
                                    <div class="help-block"></div></div>
                                </div>
                            </form>
        <?php endwhile; ?>
    <?php endif; ?>
<?php } ?>
                            <?php
                                global $post;
                                $post_slug=$post->post_name;
                                //$page = get_page_by_title( $post_slug );
                                $page = get_page_by_title( 'your-feedback' );
                                $content = apply_filters('the_content', $page->post_content); 
                                echo $content;
                            ?>

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
                        <li><a href="team">OUR TEAM</a></li>
                        <li><a href="partners">OUR PARTNERS</a></li>
                        <li><a href="careers">CAREERS</a></li>
                        <li><a href="feedback" class="active-link">Your feedback</a></li>
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