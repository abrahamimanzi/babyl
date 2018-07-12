<?php
/*
* Template Name: FeedbackSent
*/
?>
<?php
    if(isset($_POST['submit']))
    {
        //The form has been submitted, prep a nice thank you message
        //$output = '<h1>Thanks for your file and message!</h1>';
        //Set the form flag to no display (cheap way!)
        //$flags = 'style="display:none;"';

        //Deal with the email
        $to = 'abraham@cube.rw';
        $clientName = trim($_POST['name']);
        $clientEmail = trim($_POST['email']);
        $subject = trim($_POST['subject']);

        $message = strip_tags($_POST['message']);
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
        $filename = $_FILES['file']['name'];

        $boundary =md5(date('r', time())); 

        $headers = "From: " . $clientName . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

        $message="This is a multi-part message in MIME format.

        --_1_$boundary
        Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

        --_2_$boundary
        Content-Type: text/plain; charset=\"iso-8859-1\"
        Content-Transfer-Encoding: 7bit

        $message

        --_2_$boundary--
        --_1_$boundary
        Content-Type: application/octet-stream; name=\"$filename\" 
        Content-Transfer-Encoding: base64 
        Content-Disposition: attachment 

        $attachment
        --_1_$boundary--";

        mail($to, $subject, $message, $headers);
    }
?>
<?php get_header(); ?>
    <style type="text/css">
        body{
            background-color: #f1f2f2;
        }
    </style>



    <section class="section section_header team header_bg">
        <div class="container">
            <h1 class="text-center" style="margin: 150px 0px 0px 0px;">Thank you for your feedback
            </h1>
        </div>
    </section>
    
    <!-- <section>
    <div class="container">
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
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;
                    ?>
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
                                ?>
                                <div class="text-align-center">
                                    <a href="#" class="pr-link text-align-center"><h3><?php the_title(); ?></h3></a>
                                    <h4 class="gray-color"><?php echo wp_trim_words( get_the_content(), 40, ' ' ); ?></h4>
                                </div>
                            </div>
                            <?php endforeach; ?>
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
    </section> -->
    
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