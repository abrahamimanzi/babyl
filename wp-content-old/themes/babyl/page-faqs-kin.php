<?php
/*
* Template Name: faqs-kin
*/
?>
<?php get_header(); ?>

        <style>
            #doctorSlider .cS-hidden{
                display: none;
            }
            #doctorSlider img{
                border-radius: 5px;
            }
            /* faqs css
            **/
            a {text-decoration: none !important; }
            html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    /*margin: 0;
    padding: 0;
    border: 0;*/
    font-size: 100%;
    font: inherit;
    text-decoration: none;
    vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, main {
    display: block;
}
body {
    line-height: 1;
}
ol, ul {
    list-style: none;
}
blockquote, q {
    quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}

/* -------------------------------- 

Primary style

-------------------------------- */
*, *::after, *::before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

*::after, *::before {
  content: '';
}

body {
  font-size: 100%;
  font-family: "Open Sans", sans-serif;
  color: #4e5359;
  background-color: #f3f3f5;
}
body::after {
  /* overlay layer visible on small devices when the right panel slides in */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(78, 83, 89, 0.8);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: opacity .3s 0s, visibility 0s .3s;
  -moz-transition: opacity .3s 0s, visibility 0s .3s;
  transition: opacity .3s 0s, visibility 0s .3s;
}
body.cd-overlay::after {
  visibility: visible;
  opacity: 1;
  -webkit-transition: opacity .3s 0s, visibility 0s 0s;
  -moz-transition: opacity .3s 0s, visibility 0s 0s;
  transition: opacity .3s 0s, visibility 0s 0s;
}
@media only screen and (min-width: 768px) {
  body::after {
    display: none;
  }
}

a {
  color: #16c19d;
  text-decoration: none;
}

/* -------------------------------- 

Main components 

-------------------------------- */
header {
  position: relative;
  height: 180px;
  line-height: 180px;
  text-align: center;
  background-color: #a9c056;
}
header h1 {
  color: #ffffff;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 20px;
  font-size: 1.25rem;
}
@media only screen and (min-width: 1024px) {
  header {
    height: 240px;
    line-height: 240px;
  }
  header h1 {
    font-size: 36px;
    font-size: 2.25rem;
    font-weight: 300;
  }
}

.cd-faq {
    margin-top: 100px;
  width: 90%;
  max-width: 1024px;
  margin: 2em auto;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}
.cd-faq:after {
  content: "";
  display: table;
  clear: both;
}
@media only screen and (min-width: 768px) {
  .cd-faq {
    position: relative;
    margin: 4em auto;
    box-shadow: none;
    margin-top: 100px;
  }
}

.cd-faq-categories a {
  position: relative;
  display: block;
  overflow: hidden;
  height: 50px;
  line-height: 50px;
  padding: 0 28px 0 16px;
  background-color: #4e5359;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #ffffff;
  white-space: nowrap;
  border-bottom: 1px solid #555b61;
  text-overflow: ellipsis;
}
.cd-faq-categories a::before, .cd-faq-categories a::after {
  /* plus icon on the right */
  position: absolute;
  top: 50%;
  right: 16px;
  display: inline-block;
  height: 1px;
  width: 10px;
  background-color: #7f868e;
}
.cd-faq-categories a::after {
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.cd-faq-categories li:last-child a {
  border-bottom: none;
}
@media only screen and (min-width: 768px) {
  .cd-faq-categories {
    width: 20%;
    float: left;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
    display: none;
  }
  .cd-faq-categories a {
    font-size: 13px;
    font-size: 0.8125rem;
    font-weight: 600;
    padding-left: 24px;
    padding: 0 24px;
    -webkit-transition: background 0.2s, padding 0.2s;
    -moz-transition: background 0.2s, padding 0.2s;
    transition: background 0.2s, padding 0.2s;
  }
  .cd-faq-categories a::before, .cd-faq-categories a::after {
    display: none;
  }
  .no-touch .cd-faq-categories a:hover {
    background: #555b61;
  }
  .no-js .cd-faq-categories {
    width: 100%;
    margin-bottom: 2em;
  }
}
@media only screen and (min-width: 1024px) {
  .cd-faq-categories {
    position: absolute;
    top: 0;
    left: 0;
    width: 200px;
    z-index: 2;
    display: none;
  }
  .cd-faq-categories a::before {
    /* decorative rectangle on the left visible for the selected item */
    display: block;
    top: 0;
    right: auto;
    left: 0;
    height: 100%;
    width: 3px;
    background-color: #a9c056;
    opacity: 0;
    -webkit-transition: opacity 0.2s;
    -moz-transition: opacity 0.2s;
    transition: opacity 0.2s;
  }
  .cd-faq-categories .selected {
    background: #42464b !important;
  }
  .cd-faq-categories .selected::before {
    opacity: 1;
  }
  .cd-faq-categories.is-fixed {
    /* top and left value assigned in jQuery */
    position: fixed;
  }
  .no-js .cd-faq-categories {
    position: relative;
  }
}

.cd-faq-items {
  position: fixed;
  height: 100%;
  width: 90%;
  top: 0;
  right: 0;
  background: #ffffff;
  padding: 0 5% 1em;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  z-index: 1;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: translateZ(0) translateX(100%);
  -moz-transform: translateZ(0) translateX(100%);
  -ms-transform: translateZ(0) translateX(100%);
  -o-transform: translateZ(0) translateX(100%);
  transform: translateZ(0) translateX(100%);
  -webkit-transition: -webkit-transform .3s;
  -moz-transition: -moz-transform .3s;
  transition: transform .3s;
}
.cd-faq-items.slide-in {
  -webkit-transform: translateZ(0) translateX(0%);
  -moz-transform: translateZ(0) translateX(0%);
  -ms-transform: translateZ(0) translateX(0%);
  -o-transform: translateZ(0) translateX(0%);
  transform: translateZ(0) translateX(0%);
}
.no-js .cd-faq-items {
  position: static;
  height: auto;
  width: 100%;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
@media only screen and (min-width: 768px) {
  .cd-faq-items {
    position: static;
    height: auto;
    width: 78%;
    float: right;
    overflow: visible;
    -webkit-transform: translateZ(0) translateX(0);
    -moz-transform: translateZ(0) translateX(0);
    -ms-transform: translateZ(0) translateX(0);
    -o-transform: translateZ(0) translateX(0);
    transform: translateZ(0) translateX(0);
    padding: 0;
    background: transparent;
  }
}
@media only screen and (min-width: 1024px) {
  .cd-faq-items {
    float: none;
    width: 100%;
    /*padding-left: 220px;*/
  }
  .no-js .cd-faq-items {
    padding-left: 0;
  }
}

.cd-close-panel {
  position: fixed;
  top: 5px;
  right: -100%;
  display: block;
  height: 40px;
  width: 40px;
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  z-index: 2;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: right 0.4s;
  -moz-transition: right 0.4s;
  transition: right 0.4s;
}
.cd-close-panel::before, .cd-close-panel::after {
  /* close icon in CSS */
  position: absolute;
  top: 16px;
  left: 12px;
  display: inline-block;
  height: 3px;
  width: 18px;
  background: #6c7d8e;
}
.cd-close-panel::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.cd-close-panel::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.cd-close-panel.move-left {
  right: 2%;
}
@media only screen and (min-width: 768px) {
  .cd-close-panel {
    display: none;
  }
}

.cd-faq-group {
  /* hide group not selected */
  display: none;
}
.cd-faq-group.selected {
  display: block;
}
.cd-faq-group .cd-faq-title {
  background: transparent;
  box-shadow: none;
  margin: 1em 0;
}
.no-touch .cd-faq-group .cd-faq-title:hover {
  box-shadow: none;
}
.cd-faq-group .cd-faq-title h2 {
  text-transform: uppercase;
  font-size: 12px;
  font-size: 1.75rem;
  font-weight: 700;
  color: #9013fe;
}
.no-js .cd-faq-group {
  display: block;
}
@media only screen and (min-width: 768px) {
  .cd-faq-group {
    /* all groups visible */
    display: block;
  }
  .cd-faq-group > li {
    background: #ffffff;
    margin-bottom: 6px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
    -webkit-transition: box-shadow 0.2s;
    -moz-transition: box-shadow 0.2s;
    transition: box-shadow 0.2s;
  }
  .no-touch .cd-faq-group > li:hover {
    box-shadow: 0 1px 10px rgba(108, 125, 142, 0.3);
  }
  .cd-faq-group .cd-faq-title {
    margin: 2em 0 1em;
  }
  .cd-faq-group:first-child .cd-faq-title {
    margin-top: 0;
  }
}

.cd-faq-trigger {
  position: relative;
  display: block;
  margin: 1.6em 0 .4em;
  line-height: 1.2;
  text-align: left;
}
@media only screen and (min-width: 768px) {
  .cd-faq-trigger {
    font-size: 24px;
    font-size: 1.5rem;
    font-weight: 300;
    margin: 0;
    padding: 24px 72px 24px 24px;
    text-decoration: none;
  }
  .cd-faq-trigger::hover,.cd-faq-trigger::active{
    text-decoration: none;
  }
  .cd-faq-trigger::before, .cd-faq-trigger::after {
    /* arrow icon on the right */
    position: absolute;
    right: 24px;
    top: 50%;
    height: 2px;
    width: 13px;
    background: #16c19d;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition-property: -webkit-transform;
    -moz-transition-property: -moz-transform;
    transition-property: transform;
    -webkit-transition-duration: 0.2s;
    -moz-transition-duration: 0.2s;
    transition-duration: 0.2s;
  }
  .cd-faq-trigger::before {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    right: 32px;
  }
  .cd-faq-trigger::after {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  .content-visible .cd-faq-trigger::before {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  .content-visible .cd-faq-trigger::after {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
  }
}

.cd-faq-content p {
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.4;
  color: #6c7d8e;
}
@media only screen and (min-width: 768px) {
  .cd-faq-content {
    display: none;
    padding: 0 24px 30px;
  }
  .cd-faq-content p {
    line-height: 1.6;
  }
  .no-js .cd-faq-content {
    display: block;
  }
}

            /* end faqs css
            **/
        </style>
    <!-- Page Content -->
    <section class="term">
        <div class="container">

            <!-- Heading Row -->
            <div class="row" style="text-align: center;">
                <div class="col-md-2" style="text-align: center;">
                </div>
                <div class="col-md-8" style="text-align: center;">

    <ul class="cd-faq-categories">
        <li><a class="selected" href="#basics">GENERAL QUESTIONS</a></li>
        <li><a href="#mobile">USSD SERVICE</a></li>
        <li><a href="#account">SMARTPHONE SERVICE</a></li>
        <li><a href="#payments">Payments</a></li>
        <li><a href="#privacy">Privacy</a></li>
        <!-- <li><a href="#delivery">Delivery</a></li> -->
    </ul>
    <div class="cd-faq-items">
        <ul id="basics" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Ibibazo bikunzwe kubazwa</h2></li>

            <?php
                $our_doctors_slug = get_option('our_doctors_slug');
                global $post;
                $args = array( 'numberposts' => 16, 'category_name' => 'ibibazo-bikunzwe-kubazwa' );
                $posts = get_posts( $args );
                foreach( $posts as $post ): setup_postdata($post); 
                $postid = get_the_ID();

            ?>
            <li>
                <a class="cd-faq-trigger" href="#0"><?php the_title(); ?></a>
                <div class="cd-faq-content">
                    <p><?php echo get_the_content(); ?></p>
                </div> <!-- cd-faq-content -->
            </li>
            <?php endforeach; ?>

        </ul> <!-- cd-faq-group -->

        <ul id="mobile" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Serivisi ya USSD</h2></li>
            <?php
                $our_doctors_slug = get_option('our_doctors_slug');
                global $post;
                $args = array( 'numberposts' => 16, 'category_name' => 'serivisi-ya-ussd' );
                $posts = get_posts( $args );
                foreach( $posts as $post ): setup_postdata($post); 
                $postid = get_the_ID();

            ?>
            <li>
                <a class="cd-faq-trigger" href="#0"><?php the_title(); ?></a>
                <div class="cd-faq-content">
                    <p><?php echo wp_trim_words( get_the_content(), 4000, ' ' ); ?></p>
                </div> <!-- cd-faq-content -->
            </li>
            <?php endforeach; ?>

        </ul> <!-- cd-faq-group -->

        <ul id="account" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Serivisi ya telefoni z’ubwenge</h2></li>
            <?php
                $our_doctors_slug = get_option('our_doctors_slug');
                global $post;
                $args = array( 'numberposts' => 16, 'category_name' => 'serivisi-ya-telefoni-zubwenge' );
                $posts = get_posts( $args );
                foreach( $posts as $post ): setup_postdata($post); 
                $postid = get_the_ID();

            ?>
            <li>
                <a class="cd-faq-trigger" href="#0"><?php the_title(); ?></a>
                <div class="cd-faq-content">
                    <p><?php echo wp_trim_words( get_the_content(), 4000, ' ' ); ?></p>
                </div> <!-- cd-faq-content -->
            </li>
            <?php endforeach; ?>

            

    </div> <!-- cd-faq-items -->
                </div>
<!--
                <div class="col-md-4 aside-left">
                    <h4 class="list-title">Terms & Conditions</h4>
                    <ul>
                        <li><a id="terms" class="active-link">TERMS AND CONDITIONS</a></li>
                         <li><a href="our-mission">OUR MISSION</a></li> 
                        <li><a class="dalink" id="1">1. CONSUMER TERMS AND CONDITIONS</a></li>
                        <li><a class="dalink" id="2">2.  OUR CONTRACT WITH YOU</a></li>
                        <li><a class="dalink" id="3">3.  CHANGES TO TERMS</a></li>
                        <li><a class="dalink" id="4">4.  PROVIDING SERVICES</a></li>
                        <li><a class="dalink" id="5">5.  IF THERE IS A PROBLEM WITH THE SERVICES</a></li>
                        <li><a class="dalink" id="6">6.  PRICE AND PAYMENT</a></li>
                        <li><a class="dalink" id="7">7. OUR LIABILITY TO YOU</a></li>
                        <li><a class="dalink" id="8">8.  EVENTS OUTSIDE OUR CONTROL</a></li>
                        <li><a class="dalink" id="9">9.  YOUR RIGHTS TO CANCEL AND APPLICABLE REFUNDS</a></li>
                        <li><a class="dalink" id="10">10. OUR RIGHTS TO CANCEL AND APPLICABLE REFUND</a></li>
                        <li><a class="dalink" id="11">11. ELECTRONIC COMMUNICATIONS</a></li>
                        <li><a class="dalink" id="12">12. YOUR OBLIGATIONS</a></li>
                        <li><a class="dalink" id="13">13. INTELLECTUAL PROPERTY</a></li>
                        <li><a class="dalink" id="14">14. TRADEMARKS</a></li>
                        <li><a class="dalink" id="15">15. LICENSE AND APP USE</a></li>
                        <li><a class="dalink" id="16">16. YOUR USE OF THE COMPANY’S SYSTEMS</a></li>
                        <li><a class="dalink" id="17">17. INTERNATIONAL USE</a></li>
                        <li><a class="dalink" id="18">18. ABUSIVE USE</a></li>
                        <li><a class="dalink" id="19">19. SERVICES DESCRIPTION</a></li>
                        <li><a class="dalink" id="20">20. DISPUTES</a></li>
                        <li><a class="dalink" id="21">21. APP POLICIES, MODIFICATION, AND SEVERABILITY</a></li>
                        <li><a class="dalink" id="22">22. INFORMATION ABOUT THE COMPANY AND HOW TO CONTACT THE COMPANY</a></li>
                        <li><a class="dalink" id="23">23. HOW THE COMPANY MAY USE YOUR PERSONAL INFORMATION</a></li>
                        <li><a class="dalink" id="24">24. OTHER IMPORTANT TERMS</a></li>
                        <li><a class="dalink" id="25">SCHEDULE 1 - CONSULTATIONS TERMS AND CONDITIONS (COVERING VIDEO, AUDIO AND TEXT CONSULTATIONS)</a></li>
                        <li><a class="dalink" id="26">SCHEDULE 2 – ADDITIONAL TERMS IN RELATION TO THE END USER LICENCE FOR THE APP</a></li>
                        <li><a class="dalink" id="27">SCHEDULE 3 – ADDITIONAL TERMS AND CONDITIONS FOR THE PLACING OF PURCHASE INSTRUCTIONS</a></li>
                        <li><a class="dalink" id="28">SCHEDULE 4 – ADDITIONAL TERMS IN RELATION TO PRESCRIPTIONS</a></li>
                        <li><a class="dalink" id="29">SCHEDULE 5 – TESTING (PATHOLOGY) SERVICES</a></li>
                        <li><a class="dalink" id="30">SCHEDULE 6 – MONITOR YOUR HEALTH</a></li>
                        <li><a class="dalink" id="31">SCHEDULE 7 - CHECK A SYMPTOM</a></li>
                        <li><a class="dalink" id="32">NHS TERMS AND CONDITIONS</a></li>
                        <li><a class="dalink" id="33">BABYL THERAPY TERMS</a></li>
                        <li><a class="dalink" id="34">HML TERMS</a></li>
                    </ul>
                </div>
-->
                <!-- /.col-md-4 -->
                <div class="col-md-2" style="text-align: center;">
                </div>
                <div class="col-md-2" style="text-align: center;">
                </div>
                <div class="col-md-2" style="text-align: center;">
                </div>
                <div class="col-md-8" style="text-align: center;">
                    <?php
                        /*global $post;
                        $post_slug=$post->post_name;
                        $page = get_page_by_title( $post_slug );
                        //$page = get_page_by_title( 'terms' );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;*/
                    ?>
                    <?php /* ?>
                    <h4 id="onterms" class="text-align-center"><strong class="title-page">Your feedback</strong></h4>
                    <p class="gray-color pr-text-2">At babyl, our mission is to make healthcare better and simpler for everyone. Above all, we’re committed to providing you with the highest quality care. Because we're a UK regulated healthcare company, the terms and conditions we need to include are quite long and use formal language. By using this App (including ordering Products or Services through the App) you are deemed to understand and agree to these terms and conditions, including those relating to our liability at clause 7 and our privacy policy. But the way we work is simple: we’re here to serve you and will always do the right thing to ensure you have the best possible experience. We hold ourselves to the highest legal and ethical standards and we will never jeopardise your trust in us by failing to live up to these ideals. We value hearing from you so if you have any questions or ideas, don’t hesitate to get in touch by calling 0330 223 1008, or if calling from the Republic of Ireland, 00353 21 2355755 or emailing support@babylhealth.com.</p><br>
                    <h5 id="on1" class="title-page">BABYL HEALTHCARE SERVICES LIMITED – CONSUMER TERMS AND CONDITIONS</h5>
                    <p class="gray-color pr-text-2">We may amend these from time to time as set out in clause 3. Please check to ensure you understand the terms that will apply at the time you enter into any transaction with the Company. These Terms were most recently updated on 18 February 2015.</p>
                    <h5 id="1" class="title-page">1. DEFINITIONS</h5>
                    <p class="gray-color pr-text-2">1.1           When the following words with capital letters are used in these Terms, this is what they will mean:</p><br>
                    <p class="gray-color pr-text-2">(a)        "Advice" means the advice or other services provided by a Practitioner or the Company to a User through the App or otherwise facilitated by the Company.</p><br>
                    <p class="gray-color pr-text-2">(b)        Affiliates: those persons providing Services or Products through the Company or its App or ordered through the Company or its App, including suppliers and Practitioners and any subcontractors to the Company.</p><br>
                    <p class="gray-color pr-text-2">(c)        App: means the babyl mobile application provided by the Company and available via the Apple App Store or Google Play Store.</p><br>
                    <p class="gray-color pr-text-2">(d)        Company: Babyl Healthcare Services Limited registered in England and Wales with company number 9229684 with registered office at Floor 1, 60 Sloane Avenue, London, SW3 3XB.</p><br>
                    <p class="gray-color pr-text-2">(e)        Distance Selling Regulations: EU (Consumer Information, Cancellation and other Rights) Regulations 2013 as implemented under UK and Irish Law.</p><br>
                    <p class="gray-color pr-text-2">(f)          Event Outside Our Control: is defined in clause 8.2.</p><br>
                    <p class="gray-color pr-text-2">(g)        Materials: means any materials, documents, information, intellectual property or other assets belonging to the Company and/or any Affiliate.</p><br>
                    <p class="gray-color pr-text-2">(h)        Online Shop: means the facility provided to Users on the App for ordering and/or purchasing non-pharmaceutical and non-testing Product/s from a third party supplier.</p><br>
                    <p class="gray-color pr-text-2">(i)          Practitioner: the medical health practitioner carrying out or providing the Services to include but not limited to a registered general practitioner ("GP"), registered nurse ("Nurse") or registered medical specialist clinician or consultant ("Specialist") registered, as applicable, with the relevant body in the United Kingdom or Ireland.</p><br>
                    <p class="gray-color pr-text-2">(j)          Product: any physical product ordered by you through the Company’s App or which the Company provides to you.</p><br>
                    <p class="gray-color pr-text-2">(k)         Services: any services that the Company provides to you or which you order or access through the Company’s App</p><br>
                    <p class="gray-color pr-text-2">(l)          Terms: the terms and conditions set out in this document including the Schedules.</p><br>
                    <p class="gray-color pr-text-2">(m)       User: means a customer of the Company who makes use of the Services and/or orders or purchases Products via the App.</p><br>
                    <p class="gray-color pr-text-2">(n)        In writing or written: shall include in relation to any communication from the Company or its Affiliates, any email, on-screen alert, on-screen notification, prompt, field or other communication of information to you from the Company or its Affiliates and in relation to any communication from you to the Company shall include any email address provided to you by the Company for such communication.</p><br>
                    <h5 id="on3" class="title-page">2. OUR CONTRACT WITH YOU</h5>
                    <p class="gray-color pr-text-2">2.1           The Services and Products ordered through the App may be provided to you by the Company or by a third party. These are the terms and conditions on which the Company supplies Services, Products or otherwise contracts with you.  If a third party provides a Service or Product through the App, the third party may apply its terms and conditions to the Service or Product provided by it.  Please ensure that you carefully read these Terms and the terms and conditions of any third party which provides a Service or Product through the App.</p><br>
                    <p class="gray-color pr-text-2">2.2           The Schedules to these Terms are part of the contract.</p><br>
                    <p class="gray-color pr-text-2">2.3           The Company does not contract otherwise than on these Terms unless explicitly agreed in writing.  If you do not agree with these Terms, you should not use the Company’s App or otherwise order or use any Product or Services from the Company.</p><br>
                    <h5 id="on3" class="title-page">3.  CHANGES TO TERMS</h5>
                    <p class="gray-color pr-text-2">3.1           The Company may revise these Terms from time to time in the following circumstances:</p><br>
                    <p class="gray-color pr-text-2">(a)        changes in how the Company accepts payment from you;</p><br>
                    <p class="gray-color pr-text-2">(b)        changes in relevant laws and regulatory requirements; and</p><br>
                    <p class="gray-color pr-text-2">(c)        where the Company in its discretion deems a revisal necessary or desirable and notifies you of such a revision.</p><br>
                    <p class="gray-color pr-text-2">3.2           If the Company makes a revision to these Terms under clause 3.1, the Company will notify you when you next access the App and you will have a right to cancel the contract in accordance with clause 9.3 (c). The then current Terms will apply to any transaction or use and it is your responsibility to ensure that you are content to contract on the then current Terms at the point of any transaction or use.</p><br>
                    <h5 id="on4" class="title-page">4. PROVIDING SERVICES</h5>
                    <p class="gray-color pr-text-2">4.1           The Company will not be responsible for any delays or lack of performance by it or any of its Affiliates due to an Event Outside Our Control. See clause 8.3 for the Company's responsibilities when an Event Outside Our Control happens.</p><br>
                    <p class="gray-color pr-text-2">4.2           The Company may have to suspend the Services if the Company has to deal with technical problems, or to make improvements to the Services. The Company will use reasonable efforts to minimise such times of suspension but such suspension shall not affect your obligation to pay any subscription or other payment due, provided that such period(s) of suspension do not exceed 30 days in aggregate in any year period.</p><br>
                    <p class="gray-color pr-text-2">4.3           If you do not pay the Company for the Services when you are supposed to as set out in these Terms the Company may suspend the Services with immediate effect until you have paid the Company the outstanding amounts.</p><br>
                    <h5 id="on5" class="title-page">5. IF THERE IS A PROBLEM WITH THE SERVICES</h5>
                    <p class="gray-color pr-text-2">5.1           In the unlikely event that there is any defect with the Services:</p><br>
                    <p class="gray-color pr-text-2">(a)        please contact and inform the Company as soon as reasonably possible;</p><br>
                    <p class="gray-color pr-text-2">(b)        please give the Company a reasonable opportunity to repair or fix any defect and/or to contact the relevant Practitioner and request that they carry out the required repair or fix the defect; and</p><br>
                    <p class="gray-color pr-text-2">(c)        the Company will use reasonable efforts to repair or fix the defect as soon as reasonably practicable.  However the Company is not responsible for any failure by a Practitioner to repair or fix the defect.</p><br>
                    <p class="gray-color pr-text-2">You will not have to pay for the Company or Practitioner to repair or fix a defect with the Services under this clause 5.1.</p><br>
                    <p class="gray-color pr-text-2">5.2           As a consumer you have legal rights in relation to Services not carried out with reasonable skill and care, or if the materials the Company or Practitioner use are faulty or not as described. Advice about your legal rights is available in the UK from your local Citizens' Advice Bureau or Trading Standards office and in the Republic of Ireland from your local Citizens' Information Centre. Nothing in these Terms will affect these statutory rights.</p><br>
                    <p class="gray-color pr-text-2">5.3           The Company values your feedback and, following a consultation, provides you with the opportunity to rate your consultation and to provide additional comments. If you have any complaints, please do not hesitate to get in touch by telephoning the User service team on 0330 223 1008, or if calling from the Republic of Ireland, [00353 21 2355755] or by e-mailing the Company at support@babylhealth.com.</p><br>
                    <h5 id="on6" class="title-page">6. PRICE AND PAYMENT</h5>
                    <p class="gray-color pr-text-2">6.1           The price of the Services or Products will be set out in the Company's App or in the Schedules to these Terms at the time of agreement by the Company to provide the Services and or Products. The Company's prices may change at any time, but price changes will not affect any Services or Products that you have already ordered.</p><br>
                    <p class="gray-color pr-text-2">6.2           These prices exclude: (i) VAT, where applicable, and unless otherwise stated; and: (ii) reasonable credit card and other processing fees, where these are incurred by the Company.</p><br>
                    <p class="gray-color pr-text-2">6.3           Subject to clause 6.6, the Company will typically charge or invoice you for the Services or Products at the time you order them. Any amounts charged or invoiced are due and payable upon the invoice being issued unless otherwise specified in these Terms or the App.</p><br>
                    <p class="gray-color pr-text-2">6.4           You can pay for Services or Products using a credit or debit card.</p><br>
                    <p class="gray-color pr-text-2">6.5           Payment for the Services and/or Products and all applicable delivery charges is to be made in advance.</p><br>
                    <p class="gray-color pr-text-2">6.6           When you book a consultation with a Practitioner, request a medical test or fulfilment of a prescription, or request other Products or Services from time to time, we may: (i) charge you in full for that Service or Product, or (ii) invoice your insurer, and in the event there is a shortfall in your insurer’s contribution relative to the price of the Product or Service, later invoice you for that shortfall.</p><br>
                    <p class="gray-color pr-text-2">6.7           The Company will use reasonable endeavours to process select insurance claims directly with approved insurers on your behalf, providing you have provided correct and sufficient insurance details (including, without limitation, authorisation details for the relevant treatment), the relevant treatment is likely to be a treatment covered by the insurance company, you have consented or requested such processing in the App and the insurance company is one which is on an approved list as having agreed to such interaction with the Company. By providing your insurer’s information through the App you will be deemed to have consented to the above processing but, for the avoidance of doubt, the Company shall not process an insurance claim with any insurer without a valid pre-authorisation number for that treatment that you supply. It is your responsibility to verify with your insurer that the condition to be treated is covered by your insurance, and to obtain a pre-authorisation number for your treatment which you enter into the App. The Company is not responsible for this pre-authorisation or verification. Insufficient documentation will prevent direct settlements and may result in the account being billed to you. Any shortfalls in benefit are your responsibility. Should your insurer determine that the care and treatment is not covered, or not fully covered, under your insurance policy, you agree that you will be liable for the portion of the charges that are not settled by the insurer.</p><br>
                    <p class="gray-color pr-text-2">6.8           You agree to provide only valid pre-authorisation details and insurance processing requests through the App.</p><br>
                    <p class="gray-color pr-text-2">6.9           You understand and acknowledge that pathology (tests) and treatments ordered following a consultation with a GP may not be eligible for insurer contributions that may be available if ordered following a consultation with a Specialist.</p><br>
                    <p class="gray-color pr-text-2">6.10        You understand and acknowledge that subscriptions will automatically renew upon the end of the agreed term, unless you provide a written request to the Company to cancel the subscription prior to the end of the relevant subscription period.</p><br>
                    <p class="gray-color pr-text-2">6.11        Subscriptions available within the App are monthly subscriptions, payable up-front in advance. For your convenience, the per-month price may be displayed.</p><br>
                    <h5 id="on7" class="title-page">7. OUR LIABILITY TO YOU</h5>
                    <p class="gray-color pr-text-2">7.1           If the Company fails to comply with these Terms, the Company is responsible for loss or damage you suffer that is a foreseeable result of the Company's breach of these Terms or the Company's negligence, but the Company is not responsible for any loss or damage that:</p><br>
                    <p class="gray-color pr-text-2">(a)        is not foreseeable. Loss or damage is foreseeable if it is an obvious and direct consequence of our breach or if it is contemplated by you and the Company at the time the Company entered into this contract; or</p><br>
                    <p class="gray-color pr-text-2">(b)        has been caused by a relevant Practitioner (except to the extent such Practitioner is an employee of the Company acting within the scope of their employment), Affiliate,  subcontractor or third party .  Such Practitioner, Affiliate, subcontractor or third party person shall be solely liable for that loss or damage unless and to the extent that it is caused by the negligence, material breach or wilful default of the Company.</p><br>
                    <p class="gray-color pr-text-2">7.2           Partnership companies is not responsible for any loss or damage that has been caused by the Company, a Practitioner, an Affiliate or subcontractor or third party and the Company or the Practitioner, Affiliate, subcontractor or third party shall be solely liable for that loss or damage.</p><br>
                    <p class="gray-color pr-text-2">7.3           The App is not suitable for managing a medical emergency or acute condition, any condition that should reasonably require face to face analysis, diagnosis or treatment, or for sourcing any product or service urgently. The company cannot guarantee continuous availability of any Practitioner or any availability of any particular Practitioner.</p><br>
                    <p class="gray-color pr-text-2">7.4           Appropriate technical and organisational measures shall be taken against unauthorised or unlawful processing of personal data and against accidental loss or destruction of, or damage to, personal data but subject to that and the Company’s obligations under law as a data controller, the Company is not responsible for any data loss or unauthorised access by other persons, whether a result of unauthorised access, misaddress, technical failure, technical interference, negligence or otherwise. The Company reserves the right to withdraw or delete any information from the App at any time.</p><br>
                    <p class="gray-color pr-text-2">7.5           Except as set out under clause 7.7, the Company: </p><br>
                    <p class="gray-color pr-text-2">(a)        otherwise disclaims all warranties, express or implied;</p><br>
                    <p class="gray-color pr-text-2">(b)        does not warrant that the App, the Company’s servers, or e-mail sent from the Company are free of viruses or other harmful components.</p><br>
                    <p class="gray-color pr-text-2">(c)        will not be liable for any damages of any kind arising from the use of the App,  including, but not limited to:</p><br>
                    <p class="gray-color pr-text-2">(i)          indirect;</p><br>
                    <p class="gray-color pr-text-2">(ii)        incidental;</p><br>
                    <p class="gray-color pr-text-2">(iii)       punitive; an/or</p><br>
                    <p class="gray-color pr-text-2">(iv)       consequential damages.</p><br>
                    <p class="gray-color pr-text-2">7.6           The Company provides, among other things, a communications platform for you to communicate with Practitioners and to order products and services from third parties. Except in respect of the actions or omissions of the Company or its officers and employees acting within the scope of their employment, the Company does not accept any liability or responsibility for the actions or omissions of any third party, in particular its Affiliates and any Practitioners who are not employees of the Company.</p><br>
                    <p class="gray-color pr-text-2">7.7           The Company only supplies the Products and Services for domestic and private use. You agree not to use the Products and/or Services for any commercial, business or re-sale purpose, and the Company has no liability to you for any:</p><br>
                    <p class="gray-color pr-text-2">(a)        loss of profit;</p><br>
                    <p class="gray-color pr-text-2">(b)        loss of business;</p><br>
                    <p class="gray-color pr-text-2">(c)        business interruption; or</p><br>
                    <p class="gray-color pr-text-2">(d)        loss of business opportunity.</p><br>
                    <p class="gray-color pr-text-2">7.8           The Company does not exclude or limit in any way its liability for:</p><br>
                    <p class="gray-color pr-text-2">(a)        death or personal injury caused by the Company's negligence or the negligence of its employees, agents or subcontractors;</p><br>
                    <p class="gray-color pr-text-2">(b)        fraud or fraudulent misrepresentation;</p><br>
                    <p class="gray-color pr-text-2">(c)        breach of the terms implied by (i) section 2 of the Supply of Goods and Services Act 1982 in the United Kingdom and (ii) section 12 of the Sales of Goods Acts 1893 and 1980 in the Republic of Ireland (title and quiet possession);</p><br>
                    <p class="gray-color pr-text-2">(d)        breach of the terms implied by (i) sections 3, 4 and 5 of the Supply of Goods and Services Act 1982 in the United Kingdom and (ii) sections 13, 14 and 15 of the Sales of Goods Acts 1893 and 1980 in the Republic of Ireland  (description, satisfactory quality, fitness for purpose and samples);</p><br>
                    <p class="gray-color pr-text-2">(e)        defective products under the (i) Consumer Protection Act 1987 in the United Kingdom and (ii) Liability for Defective Products Act 1991 and the European Communities (Liability for Defective Products) Regulations, 2000 in the Republic of Ireland;</p><br>
                    <p class="gray-color pr-text-2">(f)          breach of the terms implied by section 39 of the Sale of Goods and Supply of Services Act 1980 in the Republic of Ireland; or</p><br>
                    <p class="gray-color pr-text-2">(g)        for any other liability which cannot be excluded or limited by applicable law.</p><br>
                    <p class="gray-color pr-text-2">7.9           Without prejudice to clause 7.7 above, the liability of the Company in connection with the Services and any Product whether under contract, tort/delict, statute, common law or otherwise (and including for negligence or wilful default) shall not in any circumstances exceed:</p><br>
                    <p class="gray-color pr-text-2">(a)        [£2,000] in aggregate in relation to any Services and/or Products ordered through the Online Shop; and</p><br>
                    <p class="gray-color pr-text-2">(b)        [£1,000,000] in aggregate otherwise.</p><br>
                    <h5 id="on8" class="title-page">8.  EVENTS OUTSIDE OUR CONTROL</h5>
                    <p class="gray-color pr-text-2">8.1           The Company will not be liable or responsible for any failure to perform, or delay in performance of, any of its obligations under these Terms that is caused by an Event Outside Our Control.</p><br>
                    <p class="gray-color pr-text-2">8.2           An Event Outside Our Control means any act or event beyond the Company'sreasonable control, including without limitation strikes, lock-outs or other industrial action by third parties, civil commotion, riot, invasion, terrorist attack or threat of terrorist attack, war (whether declared or not) or threat or preparation for war, fire, explosion, storm, flood, earthquake, subsidence, epidemic or other natural disaster, or failure of public or private telecommunications networks.  For the avoidance of doubt, an Event Outside Our Control includes any action or failure to act by the relevant Practitioner and/or insufficient/variable network connectivity at any time for the User, Company or Practitioner.</p><br>
                    <p class="gray-color pr-text-2">8.3           If an Event Outside Our Control takes place that materially affects the performance of the Company's obligations to you under these Terms:</p><br>
                    <p class="gray-color pr-text-2">(a)        the Company will notify you; and</p><br>
                    <p class="gray-color pr-text-2">(b)        the Company's obligations under these Terms will be suspended and the time for performance of its obligations will be extended for the duration of the Event Outside Our Control. Where the Event Outside Our Control affects the Company's performance of Services to you, the Company will resume the Services as soon as reasonably possible after the Event Outside Our Control is over.</p><br>
                    <p class="gray-color pr-text-2">8.4           You may cancel the contract immediately if an Event Outside Our Control takes place resulting in a suspension of the Services that continues for longer than 2 weeks and you no longer wish the Company to provide the Services. Please see your cancellation rights under clause 9. The Company may cancel the contract if an Event Outside Our Control continues for longer than 2 weeks.</p><br>
                    <h5 id="on9" class="title-page">9.  YOUR RIGHTS TO CANCEL AND APPLICABLE REFUNDS</h5>
                    <p class="gray-color pr-text-2">9.1           Subject to Clause 9.3, you have the following rights regarding (i) cancellation of the Services (including where you choose to cancel because the Services are affected by an Event Outside Our Control or if the Company change these Terms under clause 3.1 to your disadvantage); and (ii) refunds, where you have made a payment for a:</p><br>
                    <p class="gray-color pr-text-2">(a)        monthly subscription you may cancel the Services and you shall:</p><br>
                    <p class="gray-color pr-text-2">(i)          be entitled to a refund of your subscription, in whole or in part if you choose to cancel the Services because the Company has changes the Terms to your disadvantage or the Company breaks this contract in any material way and the Company does not correct or fix the situation within 14 business days of you asking the Company to in writing;</p><br>
                    <p class="gray-color pr-text-2">(ii)        not be entitled to a refund of your subscription, in whole or in part where you choose to cancel because the Services are affected by an Event Outside Our Control</p><br>
                    <p class="gray-color pr-text-2">(b)        non-subscription Service that you request from time to time (including, without limitation, fees for consultations with Specialists), you may cancel such requests by providing reasonable (and, in any case, greater than 24 hours) notice to the Company but you acknowledge and accept that the Company may begin to procure, resource, prepare, organise and/or undertake provision of a Service as soon as you request the Service and, accordingly, any costs the Company has reasonably incurred in procuring, resourcing, preparing, organising or undertaking the relevant Service shall be deducted from any refund that is due to you, and such deduction shall be a minimum of £10 in respect of Services provided in the United Kingdom and €14 in respect of Services provided in the Republic of Ireland. You shall not be entitled to any refund for any Services that cannot be fulfilled due to your own absence (including, without limitation, for a scheduled consultation), insufficient or variable network connectivity, negligence or other relevant error.</p><br>
                    <p class="gray-color pr-text-2">9.2           Once the Company has begun to provide the Services to you, you may cancel the contract for Services with immediate effect by giving the Company written notice if:</p><br>
                    <p class="gray-color pr-text-2">(a)        the Company breaks this contract in any material way and the Company does not correct or fix the situation within 14 business days of you asking the Company to in writing;</p><br>
                    <p class="gray-color pr-text-2">(b)        the Company goes into liquidation or a receiver or an administrator is appointed over its assets;</p><br>
                    <p class="gray-color pr-text-2">(c)        the Company changes these Terms under clause 3.1 to your disadvantage;</p><br>
                    <p class="gray-color pr-text-2">(d)        the Company is affected by an Event Outside Our Control in the circumstances set out in clause 8.4.</p><br>
                    <p class="gray-color pr-text-2">9.3           No refund shall be due because of any unavailability of any particular Practitioner where the App is functioning and an alternative Practitioner is available, or, for the avoidance of doubt, in the event of the unavailability of any feature or function of the App that is available to Users free of charge. Nor shall any refund be due because of any temporary interruption in service. You accept by using the App that Practitioners may vary in their opinions and provided any opinion and/or advice and/or recommendation and/or prescription is given in good faith by a relevant Practitioner, no refund shall be due in respect of Services provided.</p><br>
                    <p class="gray-color pr-text-2"><strong>RIGHT TO CANCEL UNDER DISTANCE SELLING REGULATIONS</strong></p><br>
                    <p class="gray-color pr-text-2">9.4           Under the Distance Selling Regulations, you can also cancel a contract within 14 days without giving any reason. Your legal right to cancel starts from the date of the confirmation email (an acceptance in writing by email from the Company or third party supplier stating that the order is accepted which will form the basis of the contract) which is when the contract between us is concluded. Your cancellation period will expire after 14 days from the day of the conclusion of the contract.</p><br>
                    <p class="gray-color pr-text-2">9.5           You acknowledge that you cannot cancel an order for the supply of digital content or Services which have been fully performed, where we started delivery of the digital content or performance of the Services upon your request.</p><br>
                    <p class="gray-color pr-text-2">9.6           To cancel your order under clause 10 You must inform us (Babyl Healthcare Service Ltd, Floor 1, 60 Sloane Avenue, London, SW3 3X England, email support@babylhealth.com) of your decision to cancel this contract by an unequivocal statement (e.g. e-mail or letter). You may use the cancellation form [insert link] but it is not obligatory. To meet the cancellation deadline, you must send your communication of cancellation before the 14 day period has expired.</p><br>
                    <p class="gray-color pr-text-2">9.7           If you cancel this contract under clause 10, we will reimburse to you all payments received from you, including the costs of delivery (with the exception of the supplementary costs resulting from your choice of a type of delivery other than the least expensive type of standard delivery offered by us) without undue delay and in any event not later than 14 days from the day on which we are informed about your decision to cancel this contract. We will carry out such reimbursement using the same means of payment as you used for the initial transaction, unless you have expressly agreed otherwise; in any event, you will not incur any fees as a result of such reimbursement.</p><br>
                    <h5 id="on10" class="title-page">10. OUR RIGHTS TO CANCEL AND APPLICABLE REFUND</h5>
                    <p class="gray-color pr-text-2">10.1        The Company may have to cancel a request for Services before the start date for the Services, due to an Event Outside Our Control or the unavailability of key personnel or key materials without which the Company cannot provide the Services. The Company will promptly notify you if a Service is unavailable.</p><br>
                    <p class="gray-color pr-text-2">10.2        Once the Company has begun to provide the Services to you, the Company may cancel the contract for the Services at any time by providing you with at least 15 calendar days' notice in writing.</p><br>
                    <p class="gray-color pr-text-2">10.3        If the Company has to cancel provision of a Service or the Services under clause</p><br>
                    <p class="gray-color pr-text-2">10.1 or clause 10.2 and you have made any payment in advance for the Service or Services that has not been provided to you:</p><br>
                    <p class="gray-color pr-text-2">(a)        in the case of a Service you have requested and paid for via a monthly subscription payment, the Company shall use reasonable endeavours to restore the affected Service per clause 4.2 and no refund of such subscription payment shall be due where the Company has cancelled the Services due to an Event Outside Our Control;</p><br>
                    <p class="gray-color pr-text-2">(b)        in the case of a Service you have requested and paid for via a non-subscription payment, the Company shall refund the individual payment to you;</p><br>
                    <p class="gray-color pr-text-2">(c)        for the avoidance of doubt, in the case of a Service you have requested that ordinarily is available free of charge to Users, you shall not be eligible to receive any refund;</p><br>
                    <p class="gray-color pr-text-2">(d)        for the avoidance of doubt, no refunds shall be payable in the event that a Service that you have requested cannot be provided due to your own absence (including, without limitation, for a scheduled consultation), negligence, failure to provide requested information or other relevant error.</p><br>
                    <p class="gray-color pr-text-2">10.4        The Company may cancel the contract for Services at any time with immediate effect by giving you written notice if:</p><br>
                    <p class="gray-color pr-text-2">(a)        you do not pay the Company when you are supposed to as set out in these Terms; or</p><br>
                    <p class="gray-color pr-text-2">(b)        you break the contract in any other material way and you do not correct or fix the situation within 7 calendar days of the Company asking you to in writing, or sooner if reasonably required.</p><br>
                    <p class="gray-color pr-text-2">10.5        From time to time, the Company will request certain information from you that may be confidential and/or covered by data protection legislation - for example, details of any medical conditions. The Company will contact you in writing about this. If you do not, after being asked by the Company, provide the Company with this information, or you provide the Company with incomplete or incorrect information, the Company may suspend the Services by giving you written notice. The Company will not be liable for any delay or non-performance where you have not provided this information to the Company after the Company have asked for such information and the Company will not be obliged to provide any refund.</p><br>
                    <h5 id="on11" class="title-page">11. ELECTRONIC COMMUNICATIONS</h5>
                    <p class="gray-color pr-text-2">11.1        When you use the App or send e-mails to us, you are communicating with us electronically. You consent to receive communications from us electronically. We will communicate with you by e-mail or by posting notices, alerts, prompts, information fields or other information through the App. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.</p><br>
                    <h5 id="on12" class="title-page">12. YOUR OBLIGATIONS</h5>
                    <p class="gray-color pr-text-2">12.1        You undertake that:</p><br>
                    <p class="gray-color pr-text-2">(a)        all information you give to the Company, its Affiliates and any Practitioner will be accurate and not omit anything of importance;</p><br>
                    <p class="gray-color pr-text-2">(b)        you will comply with all instructions and advice given to you by any Practitioner;</p><br>
                    <p class="gray-color pr-text-2">(c)        if, following use of the App, you are in any doubt, or have any concerns regarding any information or advice you have received or failed to receive via the Services, or regarding your health, wellbeing or any conditions, you agree to seek further medical opinion from a registered GP or suitable healthcare professional not affiliated with the Services and/or shall utilise the emergency services as applicable.</p><br>
                    <p class="gray-color pr-text-2">(d)        you will comply with any instructions given in relation to any prescription given to you including in particular route, timing and dosages;</p><br>
                    <p class="gray-color pr-text-2">(e)        you will promptly report any side effects of any prescription to a Practitioner.</p><br>
                    <p class="gray-color pr-text-2">(f)          you will protect anything prescribed to you and not permit any other person access to the prescription;</p><br>
                    <p class="gray-color pr-text-2">(g)        you will not use any prescription after its expiry date;</p><br>
                    <p class="gray-color pr-text-2">(h)        you will not register more than once with the App or the Services;</p><br>
                    <p class="gray-color pr-text-2">(i)          subject to clause 16 you will not register on behalf of any other person or answer questions or pretend to be any other person;</p><br>
                    <p class="gray-color pr-text-2">(j)          you will promptly notify the Company if you are aware that any part of your medical record in the App or held by the Company including any tests, prescriptions, imaging, advice given or opinion expressed is incomplete or inaccurate; and</p><br>
                    <p class="gray-color pr-text-2">(k)         to help us protect the privacy and security of your information, you agree not to make independent recordings of consultations. Your consultations are available for playback within the App.</p><br>
                    <h5 id="on13" class="title-page">13. INTELLECTUAL PROPERTY</h5>
                    <p class="gray-color pr-text-2">13.1        The content of the Company's website, App and other Materials is protected by copyright, trademarks, database right and other intellectual property rights.</p><br>
                    <p class="gray-color pr-text-2">13.2        You may retrieve and display the content of the Company's App and/or any information stored on or procured through it on a computer or device screen, store such content in electronic form on disk or print copies of such content for your own personal and non-commercial use, provided you keep intact all and any copyright and proprietary notices.</p><br>
                    <p class="gray-color pr-text-2">13.3        Consultations, activity and data inputted in the App may be recorded by the Company and you consent to such recording, storage and subsequent retrieval by the Company. You may view consultation recordings from within the App for your own private purposes (and may show them to any other medical practitioner who is supporting your care) but you acknowledge that all intellectual property rights in these belong to the Company.</p><br>
                    <p class="gray-color pr-text-2">13.4        You may not otherwise reproduce, modify, copy or distribute or use for commercial purposes any of the materials or content of the Company's App without written permission from the Company.  You do not obtain any right in the copyright, design right or any other intellectual property rights in any materials or other documents or items made available to you on the Company's App or through your use of the Services.</p><br>
                    <p class="gray-color pr-text-2">13.5        You shall be entitled to use any such materials, documents or other items as are referred to in paragraphs 13.1 to 13.4 above for personal use and only in connection with the Services but shall not be entitled to copy, edit, alter or disseminate (including but not limited to, distributing or making the materials, documents or other items available on a file-sharing network) any such items (in whole or in part) or use them for any commercial purpose. For the avoidance of doubt, nothing in these Terms restricts you from using your medical information for your own personal use including passing to any other medical practitioner.</p><br>
                    <p class="gray-color pr-text-2">13.6        All content included in the App, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations and software, is the property of the Company or its content suppliers and protected by national and international copyright laws. The compilation of all content in the App is the exclusive property of the Company. All software used in the App is the property of the Company or its software suppliers and protected by national and international copyright laws.</p><br>
                    <h5 id="on14" class="title-page">14. TRADEMARKS</h5>
                    <p class="gray-color pr-text-2">The Babyl mark, logo, combined mark and logo and other marks indicated in our App are trademarks of the Company or its affiliates in the United Kingdom and other countries. Other graphics, logos, page headers, button icons, scripts, and service names are trademarks or trade dress of the Company or its Affiliates.</p><br>
                    <h5 id="on15" class="title-page">15. LICENSE AND APP USE</h5>
                    <p class="gray-color pr-text-2">The Company grants you a limited license to access and make personal use of the App and not to modify it, or any portion of it, except with express written consent of the Company. This license does not include any resale or commercial use of the App or its contents; any derivative use of the App or its contents; or any use of data mining, robots, or similar data gathering and extraction tools. The App or any portion of the App may not be reproduced, duplicated, copied, sold, resold, visited, or otherwise exploited for any commercial purpose without express written consent of the Company. Any unauthorised use terminates the permission or license granted by the Company. You may not use any logo or other proprietary graphic or trademark of the Company or its Affiliates as part of the link without our express written permission.</p><br>
                    <h5 id="on16" class="title-page">16. YOUR USE OF THE COMPANY’S SYSTEMS</h5>
                    <p class="gray-color pr-text-2">Persons aged 18 years of older may use the App on their own, via their own account, via payment made using their own credit or debit card. Persons aged 16 years to 18 years may use the App on their own, via their own account, with payment provided by a credit or debit card belonging to a parent, legal guardian or other adult individual who has consented for their credit or debit card to be used for such purposes. Persons older than 28 days and under 16 years of age (a “Minor”) may have their account opened by a parent or legal guardian on their behalf but (i) the Minor’s account shall be accessible only by switching profiles within the adult’s account to which it is attached; and (ii) the Minor may use the App and the Services only with the express permission and ongoing presence and supervision of the parent or legal guardian. The Company and its Affiliates reserve the right to refuse to provide Services and/or Products, terminate accounts, or remove or edit content where they have a reasonably held suspicion that a Minor is using the App and/or the Services contrary to the provisions of this clause 16.</p><br>
                    <h5 id="on17" class="title-page">17. INTERNATIONAL USE</h5>
                    <p class="gray-color pr-text-2">The App may only be used within the United Kingdom and Ireland and may not be used in any circumstances where the laws of any jurisdiction outside the United Kingdom and Ireland would apply to its use, or the provision of the Services or Products.  The Company makes no promise that materials on the Company's website, App, Systems and Online Shop are appropriate or available for use in locations outside the United Kingdom and Ireland and accessing the Company's website, App, Systems and Online Shop from territories where its contents are illegal or unlawful is prohibited.  If in contravention of these Terms you access the Company's website, App, Systems and Online Shop from locations outside the United Kingdom and Ireland, you do so on your own initiative and are responsible for compliance with local laws.</p><br>
                    <h5 id="on18" class="title-page">18. ABUSIVE USE</h5>
                    <p class="gray-color pr-text-2">The Company reserves the right to deny any person (inclusive of any User) access to the App and/or its Services and Products in the event that the person is abusive or inappropriate to any Practitioner or any employee or agent of the Company. Inappropriate use includes, without limitation: (i) inappropriate, abusive, offensive behaviour or remarks; or (ii) ‘time-wasting’; or (iii) excessive use of a Service or Services in the reasonable opinion of the Company and/or relative to typical usage patterns in the reasonable opinion of the Company. In the event of inappropriate or abusive use, the Company reserves the right to terminate provision of Services or Products and use of the App (including deletion of the User’s account and information) immediately upon notice.</p><br>
                    <h5 id="on19" class="title-page">19. SERVICES DESCRIPTION</h5>
                    <p class="gray-color pr-text-2">The Company and its Affiliates attempt to be as accurate as possible in their description of the Services. However, the Company does not warrant that descriptions of services or other content of the App is accurate, complete, reliable, current, or error-free. The Company provides links to other sites and maintains feeds from external data providers over which the Company has no control. The Company is not responsible for the availability of such external sites or resources and does not endorse and is not responsible or liable for any content, advertising, products or other material on or available from such sites or resources.</p><br>
                    <h5 id="on20" class="title-page">20. DISPUTES</h5>
                    <p class="gray-color pr-text-2">20.1        If any dispute arises in connection with these Terms, the parties will attempt to resolve the dispute between the parties.  If the dispute is not resolved within 60 days of the initial notification of a dispute by either party, the parties will attempt to settle it by way of mediation in accordance with the Centre for Effective Dispute Resolution (CEDR) Model Mediation Procedure. Unless otherwise agreed between the parties, the mediator will be nominated by CEDR. To initiate the mediation either the Company will give you or you must give us notice in writing ("ADR notice") requesting a mediation. A copy of the request should be sent to CEDR. The mediation will start not later than 60 days after the date of the ADR notice. No party may commence any court proceedings in relation to any dispute arising out of this agreement until it has attempted to settle the dispute by mediation and either the mediation has terminated or the other party has failed to participate in the mediation for a period of 30 days after the mediation has started.</p><br>
                    <p class="gray-color pr-text-2">20.2        Following mediation under this clause 20, in the event that any dispute remains unresolved relating in any way to your use of the App, that dispute shall be submitted to confidential arbitration in London or Dublin following the CEDR rules specifying English or Irish law and one arbiter. The arbitrator’s award shall be binding and may be entered as a judgment in any court of competent jurisdiction. To the fullest extent permitted by applicable law, no arbitration under these Terms shall be joined to an arbitration involving any other party subject to these Terms, whether through class arbitration proceedings or otherwise.</p><br>
                    <h5 id="on21" class="title-page">21. APP POLICIES, MODIFICATION, AND SEVERABILITY</h5>
                    <p class="gray-color pr-text-2">21.1        We reserve the right to make changes to our App at any time and, subject to clause </p><br>
                    <p class="gray-color pr-text-2">10.3, to withdraw any Service by providing you with reasonable notice.</p><br>
                    <p class="gray-color pr-text-2">21.2        If any of these Terms shall be deemed invalid, void, or for any reason unenforceable, that condition shall be deemed severable and shall not affect the validity and enforceability of any remaining condition.</p><br>
                    <h5 id="on22" class="title-page">22. INFORMATION ABOUT THE COMPANY AND HOW TO CONTACT THE COMPANY</h5>
                    <p class="gray-color pr-text-2">22.1        The Company is a limited company registered in England and Wales. The company registration number is 9229684 and the registered office is at Floor 1, 60 Sloane Avenue, London, SW3 3X. The Company operates the website www.babylhealth.com.  The main trading address of the Company is Floor 2, 6 Salem Road, London W2 4BU.</p><br>
                    <p class="gray-color pr-text-2">22.2        If you have any questions or if you have any complaints, please contact the Company. You can contact the Company by telephoning the User service team at 0330 223 1008, or from the Republic of Ireland [</p><br>
                    <p class="gray-color pr-text-2">22.3        00353 21 2355755 or by e-mailing the Company at support@babylhealth.com.</p><br>
                    <p class="gray-color pr-text-2">22.4        If you wish to contact the Company in writing, or if any clause in these Terms requires you to give the Company notice in writing (for example, to cancel the contract), you can send this to the Company by e-mail, by hand, or by pre-paid post to Babyl Healthcare Services Limited at Floor 1, 60 Sloane Avenue, London, SW3 3X. The Company will confirm receipt of this by contacting you in writing. If the Company has to contact you or give you notice in writing, the Company will do so by e-mail, by hand, in writing or by pre-paid post to the address you provide to the Company upon agreement by the Company to provide the Services.</p><br>
                    <h5 id="on23" class="title-page">23. HOW THE COMPANY MAY USE YOUR PERSONAL INFORMATION</h5>
                    <p class="gray-color pr-text-2">23.1        The Company will use the personal information you provide to the Company to:</p><br>
                    <p class="gray-color pr-text-2">(a)        provide the Products and Services;</p><br>
                    <p class="gray-color pr-text-2">(b)        provide to Affiliates of the Company where reasonable or necessary in relation to the provision of the Products and Services, including provision of your information to Practitioners including Nurses, GPs, Specialists, dispensing chemists, partner pathology (testing) providers, and suppliers or subcontractors used in relation to the Online Shop;</p><br>
                    <p class="gray-color pr-text-2">(c)        process your payment for such Products and Services;</p><br>
                    <p class="gray-color pr-text-2">(d)        review and enhance the quality of the Services, including monitoring compliance with clinical care standards;</p><br>
                    <p class="gray-color pr-text-2">(e)        comply with reasonable requests by regulatory bodies including the General Medical Council, or as otherwise required by law or regulation;</p><br>
                    <p class="gray-color pr-text-2">(f)          where you request it or have otherwise consented, provide it to your insurance company(y/ies) who may contribute to the cost of the Products or Services you request to use;</p><br>
                    <p class="gray-color pr-text-2">(g)        provide information to your other healthcare providers; or</p><br>
                    <p class="gray-color pr-text-2">(h)        the detection of fraud.</p><br>
                    <p class="gray-color pr-text-2">23.2        We only use your personal information in accordance our Privacy Policy. For details, please see our Privacy Policy. Please take the time to read these, as they include important terms that apply to you and are integrated into these Terms.</p><br>
                    <p class="gray-color pr-text-2">23.3        We will not provide your personal information to any other persons or use it for any other purpose except as set out in this clause and in the Privacy Policy.</p><br>
                    <p class="gray-color pr-text-2">23.4        If you elect to pre-authorise a treatment via an insurance company, you acknowledge and agree that it may be necessary to provide access to your contact, personal, medical, treatment, outcomes or other information, to your insurer to facilitate your request and the insurer’s quality control and clinical practice requirements. Alternatively, the insurer may contact you with a separate consent form, requesting that you allow them to request information from us relating to your claim.</p><br>
                    <p class="gray-color pr-text-2">23.5        The Company retains the right to use anonymised data for purposes including (without limitation) research.</p><br>
                    <p class="gray-color pr-text-2">23.6        The Company uses a third party to process payments and refunds. We do not store your credit card details. Credit card details are stored securely with a third party in the eventuality of payment being required for future purchases or shortfalls in payments by insurers.</p><br>
                    <p class="gray-color pr-text-2">23.7        Authorised members of the Company’s clinical team may utilise consultation recordings for audit and quality monitoring purposes.</p><br>
                    <h5 id="on24" class="title-page">24. OTHER IMPORTANT TERMS</h5>
                    <p class="gray-color pr-text-2">24.1        The Company may transfer its rights and obligations under these Terms to another organisation, and the Company will always notify you in writing if this happens, but this will not affect your rights or the Company's obligations under these Terms.</p><br>
                    <p class="gray-color pr-text-2">24.2        You may only transfer your rights or your obligations under these Terms to another person if the Company agrees in writing.</p><br>
                    <p class="gray-color pr-text-2">24.3        Notwithstanding that this contract has a number of Schedules which may apply to one or more of the particular Services or Products supplied by the Company, they are one set of terms and may only be accepted or declined in full.</p><br>
                    <p class="gray-color pr-text-2">24.4        The Terms are the terms of the contract between you and the Company. No other person shall have any rights to enforce any of the Terms. The Company may enforce the Terms on behalf of Affiliates.</p><br>
                    <p class="gray-color pr-text-2">24.5        If an Affiliate which is a third party provides a Service or Product through the App, such third party may apply its terms and conditions to the Service or Product provided by it and such terms and conditions will form the basis of a contract between you and the third party. </p><br>
                    <p class="gray-color pr-text-2">24.6        Each of the clauses of these Terms operates separately. If any court or relevant authority decides that any of them are unlawful, the remaining clauses will remain in full force and effect.</p><br>
                    <p class="gray-color pr-text-2">24.7        If the Company fails to insist that you perform any of your obligations under these Terms, or if the Company does not enforce its rights against you, or if the Company delays in doing so, that will not mean that the Company has waived its rights against you and will not mean that you do not have to comply with those obligations. If the Company does waive a default by you, the Company will only do so in writing, and that will not mean that the Company will automatically waive any later default by you.</p><br>
                    <p class="gray-color pr-text-2">24.8        These Terms are governed by English law. You and the Company both agree to submit to the non-exclusive jurisdiction of the English courts. However, if you are a resident of Northern Ireland you may also bring proceedings in Northern Ireland, if you are a resident of Scotland, you may also bring proceedings in Scotland and if you are a resident in the Republic of Ireland, you may also bring proceedings in the Republic or Ireland.</p><br>
                    <br><br><h4 class="title-page">ANNEX – JERSEY TERMS AND CONDITIONS</h4><br>
                    <p class="gray-color pr-text-2">The variations set out in this Annex apply to Jersey resident Users only.  Subject as set out in this Annex, the Terms shall continue in full force and effect in all respects.</p><br>
                    <h5 class="title-page">1.   PRICE AND PAYMENT</h5>
                    <p class="gray-color pr-text-2">1.1           Clause 6 shall be amended in its entirety to read as follows:</p><br>
                    <p class="gray-color pr-text-2">“6.1      The price of the Services or Products will be made available by the Practitioner’s surgery or practice, or by the Practitioner, prior to the consultation and by undertaking a consultation the User consents to pay such price(s). The User acknowledges that the User, and not the Company, is responsible for any payments due following a Consultation with a Practitioner or any other person or body.</p><br>
                    <p class="gray-color pr-text-2">6.2       You authorise the Practitioner and/or Practitioner’s Practice to apply to the Jersey Social Security department or equivalent body to receive payments or part-payments towards consultations that you undertake through the App.</p><br>
                    <h5 class="title-page">2.  INTERNATIONAL USE</h5>
                    <p class="gray-color pr-text-2">Clause 17 shall be amended in its entirety to read as follows:</p><br>
                    <p class="gray-color pr-text-2">“The App may only be used from within the United Kingdom, Ireland and/or Jersey, and may not be used in any circumstances where the law of any jurisdiction outside the United Kingdom, Ireland and/or Jersey would apply to its use, or the provision of the Services or Products.  For the avoidance of doubt, Services and Products will only be delivered in or from within the United Kingdom, Ireland and/or Jersey.  The Company makes no promise that materials on the Company's website, App, Systems and Online Shop are appropriate or available for use in locations outside the United Kingdom, Ireland and/or Jersey, and accessing the Company's website, App, Systems and Online Shop from territories where its contents are illegal or unlawful is prohibited.  If in contravention of these Terms you access the Company's website, App, Systems and Online Shop from locations outside the United Kingdom, Ireland and/or Jersey, you do so on your own initiative and are responsible for compliance with local laws.”</p><br>
                    <h5 class="title-page">3.  HOW THE COMPANY MAY USE YOUR PERSONAL INFORMATION</h5>
                    <p class="gray-color pr-text-2">3.1           The following Clause shall be added as a new Clause 23.8 of the Terms:</p><br>
                    <p class="gray-color pr-text-2">“23.8    Practitioners’ surgeries or practices may provide information to the department of Social Security for the purpose of authorising payments.”</p><br>
                    <h5 class="title-page">4.  OTHER IMPORTANT TERMS</h5>
                    <p class="gray-color pr-text-2">4.1           Clause 24.7 shall be amended in its entirety to read as follows:</p><br>
                    <p class="gray-color pr-text-2">“24.7    These Terms are governed by English law. You and the Company both agree to submit to the non-exclusive jurisdiction of the English courts. However, if you are a resident of Jersey, you may also bring proceedings in Jersey, if you are a resident of Northern Ireland you may also bring proceedings in Northern Ireland, and if you are a resident of Scotland, you may also bring proceedings in Scotland.”</p><br>
                    <h5 class="title-page">5.  SCHEDULE 1</h5>
                    <p class="gray-color pr-text-2">5.1           Clause 1.1 of Schedule 1 shall be deleted in its entirety and replaced with the following:</p><br>
                    <p class="gray-color pr-text-2">“1.1      Consultations are carried out by independent Practitioners who are not employees, officers, consultants or other affiliates of the Company and the definition of Affiliates shall be construed accordingly.  The Company makes no representation or guarantee in relation to, and is not responsible for, the qualifications of any Practitioner or the suitability of any Practitioner.”</p><br>
                    <p class="gray-color pr-text-2">5.2           Clause 1.2 of Schedule 1 shall be deleted in its entirety and replaced with the following:</p><br>
                    <p class="gray-color pr-text-2">“1.2      Consultations are subject to Practitioner availability, over which the Company has no control.”</p><br>
                    <p class="gray-color pr-text-2">5.3           Clause 3.1(a) of Schedule 1 shall be amended in its entirety to read as follows:</p><br>
                    <p class="gray-color pr-text-2">“(a)      to provide a professional and transparent service that complies with General Medical Council Guidelines on remote prescribing, essential standards of quality and safety as interpreted by the Care Quality Commission and/or the Health and Social Services Department of the States of Jersey (or other applicable or successor body), and clinical best practice in the UK and / or Jersey;”</p><br>
                    <h5 class="title-page">6.  SCHEDULE 4</h5>
                    <p class="gray-color pr-text-2">6.1           Clauses 1, 2 and 3 of Schedule 4 shall be deleted in their entirety and replaced with the following:</p><br>
                    <p class="gray-color pr-text-2">“1.1      Practitioners may from time to time provide prescriptions for medication. The User acknowledges that they are solely responsible for arranging to receive prescription medication and paying for such medication on such Terms that the User agrees with the third party that dispenses the medication.”</p><br>
                    <h5 class="title-page">7.  SCHEDULE 5</h5>
                    <p class="gray-color pr-text-2">7.1           Schedule 5 shall be deleted in its entirety and replaced with the following:</p><br>
                    <p class="gray-color pr-text-2">“TESTING PATHOLOGY SERVICES</p><br>
                    <p class="gray-color pr-text-2">“1.3      Certain Practitioners may provide referrals for diagnostic tests following a consultation. The User acknowledges that they are solely responsible for arranging, undertaking and paying for such tests, if they choose to undertake them.”</p><br>
                    <br><br><h4 id="on25" class="title-page">SCHEDULE 1 - CONSULTATIONS TERMS AND CONDITIONS (COVERING VIDEO, AUDIO AND TEXT CONSULTATIONS)</h4><br>
                    <h5 class="title-page">1.  NATURE OF ADVICE GIVEN VIA THE SERVICES AND RELIANCE</h5>
                    <p class="gray-color pr-text-2">1.1           Certain Practitioners are employed by the Company and other Practitioners are independent third parties.  The Company has taken reasonable steps to verify the identity of Practitioners against their regulatory body’s database of members and in the normal course of events will use reasonable efforts to verify certain background information about a Practitioner.  However, the Company makes no representation or guarantee in relation to, and is not responsible for, the qualifications of any Practitioner or the suitability of any Practitioner that is not an employee of the Company.</p><br>
                    <p class="gray-color pr-text-2">1.2           Consultations are subject to Practitioner availability. When you place an order for a consultation with a Practitioner, the Company shall use reasonable efforts to offer a consultation within a reasonable period of time, but the Company does not guarantee to offer a consultation within a particular time frame.</p><br>
                    <p class="gray-color pr-text-2">1.3           By using a text, audio and/or video consultation, you consent to the use of a remote service.</p><br>
                    <p class="gray-color pr-text-2">1.4           You acknowledge that while the Company takes all reasonable precautions, due to the nature of electronic communications the security of a remote interaction cannot be guaranteed.</p><br>
                    <p class="gray-color pr-text-2">1.5           You understand and agree that consultations with GPs and Nurses may be limited to 10 minutes in duration and that consultations with Specialist may be limited to 20 minutes in duration.</p><br>
                    <p class="gray-color pr-text-2">1.6           Advice, information or other communications given or made remotely by audio or video are by their nature limited relative to a face-to-face consultation.  A non-face to face consultation may therefore not be sufficient in certain circumstances and Users should be aware of, and by using the Company’s App and any other facility are deemed to have accepted, those limitations. In particular, a non-face to face consultation is unlikely to be appropriate or sufficient in circumstances of: (i) emergency, (ii) urgency, (iii) where a physical examination is likely to be required, (iv) where physical intervention is likely to be required, or (v) where the problem, issue or information required is not suited to remote communication.</p><br>
                    <p class="gray-color pr-text-2">1.7           It is the responsibility of the User to evaluate whether any advice received via the Services is suitable or sufficient for the User’s needs, to what extent the User should rely upon it and whether the User should seek the assistance of their GP, other medical practitioner or emergency services.</p><br>
                    <p class="gray-color pr-text-2">1.8           If, following use of the App, you are in any doubt, or have any concerns regarding any information or advice you have received or failed to receive via the Services, or regarding your health, wellbeing or any conditions, you agree to seek further medical opinion from a registered GP or suitable healthcare professional not affiliated with the Services and/or shall utilise the emergency services as applicable.</p><br>
                    <p class="gray-color pr-text-2">1.9           You acknowledge and agree that when using the Company’s “Ask A Question” (also known as “Ask”) Service, which may from time to time enable you to send a textual question to a Practitioner: (i) the Company makes no guarantee, warranty or undertaking regarding the timeframe within which you should expect to receive a reply, if at all; (ii) any replies are for general informational purposes only; replies are not intended and may not be treated as personalised health advice for the User; and (iii) follow-up questions from the User may not receive a reply.</p><br>
                    <h5 class="title-page">2. AMENDMENT OF THE TERMS</h5>
                    <p class="gray-color pr-text-2">A User may separately agree terms and conditions with a Practitioner in relation to the Terms upon which that Practitioner is willing to provide services to the User.  If that is the case, such agreement shall not affect these terms to the extent they apply to the relationship between the User and the Company.</p><br>
                    <h5 class="title-page">3.  COMMITMENT TO YOU</h5>
                    <p class="gray-color pr-text-2">3.1           Each of our Practitioners who is a GP has committed:</p><br>
                    <p class="gray-color pr-text-2">(a)        to provide a professional and transparent service that complies with (i) the General Medical Council Guidelines on remote prescribing, essential standards of quality and safety as interpreted by the Care Quality Commission and clinical best practice in the UK; or (ii) the Medical Council Guide to Professional Conduct and Ethics for Registered Medical Practitioners, Seventh Edition 2009, and clinical best practice in Ireland;</p><br>
                    <p class="gray-color pr-text-2">(b)        to volunteer where requested their name and General Medical Council / Irish Medical Council professional registration number when prescribing medicines and communicating with patients;</p><br>
                    <p class="gray-color pr-text-2">(c)        to prescribe medicines only when in their professional judgment it is in the patient's best interests to receive the medicine being requested and, accordingly, to refuse to prescribe medicines when they believe it is not in the patient's best interests to receive medicines without the benefit of a face to face consultation; and</p><br>
                    <p class="gray-color pr-text-2">(d)        to take all reasonable steps to protect patients' personal information.</p><br>
                    <br><br><h4 id="on26" class="title-page">SCHEDULE 2 – ADDITIONAL TERMS IN RELATION TO THE END USER LICENCE FOR THE APP</h4><br>
                    <p class="gray-color pr-text-2">Operating system requirements This App requires an iPhone version 4 or more recent, running iOS 6 or higher, or an Android smartphone running Android v4.2 or more recent, and a consistent 3G (or faster) data connection. For the avoidance of doubt, GPRS or EDGE connections are not suitable ("Devices").</p><br>
                    <p class="gray-color pr-text-2">We recommend that if you are using a wireless network to access the App, you avoid use of public wi-fi facilities in favour of a personal wi-fi connection, and that the wireless network is secured with WPA-2 security. We recommend that the device from which you access the App is password protected, set to lock after a short period of inactivity, and protected with suitable anti-virus and anti-malware software.</p><br>
                    <p class="gray-color pr-text-2">From time to time, updates to the App may be made available to you. We recommend that you use the latest version of the App at all times, to take advantage of the latest enhancements.</p><br>
                    <h5 class="title-page">1.  ACKNOWLEDGEMENTS</h5>
                    <p class="gray-color pr-text-2">1.1           If any open-source software is included in the App or any Service, the terms of an open-source licence may override some of the terms of this end user licence.</p><br>
                    <p class="gray-color pr-text-2">1.2           From time to time updates to the App may be issued. Depending on the update, you may not be able to use the Services until you have downloaded or streamed the latest version of the App and accepted any new terms.</p><br>
                    <p class="gray-color pr-text-2">1.3           By using the App or any of the Services, you consent to us collecting and using technical information about the Devices and related software, hardware and peripherals for Services that are internet-based or wireless to improve our products and to provide any Services to you.</p><br>
                    <p class="gray-color pr-text-2">1.4           Certain Services, including Prescriptions, may make use of location data sent from the Devices. You can turn off this functionality at any time by turning off the location services settings for the App on your device. If you use these Services, you consent to us and our Affiliates' and licensees' transmission, collection, maintenance, processing and use of your location data and queries to provide and improve location-based products and services. You may withdraw this consent at any time by turning off the location services settings on your device.</p><br>
                    <p class="gray-color pr-text-2">1.5           The App or any Service may contain links to other independent third-party websites (Third-party Sites). Third-party Sites are not under our control, and we are not responsible for and do not endorse their content or their privacy policies (if any). You will need to make your own independent judgement regarding your interaction with any Third-party Sites, including the purchase and use of any products or services accessible through them.</p><br>
                    <h5 class="title-page">2. PURPOSE OF APP</h5>
                    <p class="gray-color pr-text-2">2.1           You acknowledge that the App has not been developed to meet your individual requirements, and that it is therefore your responsibility to ensure that the facilities and functions of the App meet your requirements.</p><br>
                    <p class="gray-color pr-text-2">2.2           The App is not a medical device. While certain information controlled, generated by, displayed within or stored in the App (including, without limitation, by the ‘Monitor Me feature) may be helpful in providing warning of certain medical or health conditions or circumstances, the App is not designed, nor may you use it as, a device to detect, diagnose, treat or monitor any medical or health condition or to establish the existence or absence of any medical or health condition. No responsibility is accepted in this regard by the Company or any of its Affiliates.</p><br>
                    <br><br><h4 id="on27" class="title-page">SCHEDULE 3 – ADDITIONAL TERMS AND CONDITIONS FOR THE PLACING OF PURCHASE INSTRUCTIONS THROUGH THE ONLINE SHOP</h4><br>
                    <h5 class="title-page">1. PRODUCTS</h5>
                    <p class="gray-color pr-text-2">1.1           For the avoidance of doubt, any reference to ‘Product’ in this Schedule shall refer to products that are not prescription items or pathology tests as described in Schedules 4 or 5, and which are ordered via the Online Shop feature within the App.</p><br>
                    <p class="gray-color pr-text-2">1.2           The images of the Products on our App are for illustrative purposes only. Although we have made reasonable efforts to display the colours accurately, we cannot guarantee that your device's display of the colours accurately reflect the colour of the Products. Your Products may vary slightly from those images.</p><br>
                    <p class="gray-color pr-text-2">1.3           The packaging of the Products may vary from that shown on images on our site.</p><br>
                    <p class="gray-color pr-text-2">1.4           All Products shown on our site are subject to availability. We will inform you by e-mail as soon as possible if the Product you have ordered is not available and we will refund your payment promptly.</p><br>
                    <h5 class="title-page">2. CONSUMER RIGHTS</h5>
                    <p class="gray-color pr-text-2">2.1           If you are a consumer, you may only purchase Products from our site if you are at least 18 years old, or if you are between the ages of 16 and 18 using a credit card belonging to a parent, legal guardian or other adult with their express permission.</p><br>
                    <p class="gray-color pr-text-2">2.2           As a consumer, you have legal rights in relation to Products that are faulty or not as described. Advice about your legal rights is available in the United Kingdom from your local Citizens' Advice Bureau or Trading Standards office or in the Republic of Ireland from your local Citizens' Information Centre. Nothing in these Terms will affect these statutory rights.</p><br>
                    <p class="gray-color pr-text-2">2.3           Products are supplied to you via a third party supplier. We do not receive any fee, commission or other remuneration for placing an order on your behalf for these Products following receipt from you of a purchase instruction.  By purchasing these Products no contract of sale, retail or other commercial arrangement is created between you and us.  When purchasing such Products we act solely as your agent on your behalf to place the order with the third party supplier, who will then deliver the Product/s direct to you and under their own terms and conditions of supply.  Any legal rights as set out in paragraph 2.2 of this Schedule shall apply in respect of the third party supplier only so far as they relate to a contract for the sale of goods.</p><br>
                    <p class="gray-color pr-text-2">2.4           We shall not be held liable for any Product purchased via a third party supplier and you shall indemnify and hold us harmless from all claims and all direct, indirect or consequential liabilities (including loss of profits, loss of business, depletion of goodwill and similar losses), costs, proceedings, damages and expenses (including legal and other professional fees and expenses) awarded against, or incurred or paid by, you as a result of or in connection with purchase of any Product via a third party supplier.</p><br>
                    <p class="gray-color pr-text-2">2.5           Where any dispute or any other claim arises in respect of any purchase of Product via a third party supplier and any expense or other relevant cost is incurred by us in respect of such dispute or claim you shall indemnify and reimburse us in full for any such expense or cost.</p><br>
                    <h5 class="title-page">3. PLACING A PURCHASE INSTRUCTION WITH US</h5>
                    <p class="gray-color pr-text-2">3.1           After you place a purchase instruction, you will receive a confirmation from us acknowledging that we have received your instruction.  However, please note that this does not mean that your instruction or an “order” has been accepted.  We will in turn, on your behalf and acting as your agent, place in your name an order for the Product requested through a third party supplier. When placing an order for a product through a third party supplier you authorise us to accept the terms of conditions of the third party supplier on your behalf. You will then in turn receive (either directly from the third party supplier, or via the Company acting as your agent) an acceptance in writing from the third party supplier if that order is accepted which will form the basis of the contract between you and the third party supplier in relation to the supply of the relevant Products.  (Please note that no contract in respect of delivery or sale of the relevant Products is concluded between you and us. We act on your behalf as a conduit to place with third party suppliers the order you made through our App).</p><br>
                    <p class="gray-color pr-text-2">3.2           If we are unable to supply you with a Product, for example because that Product is not in stock or no longer available or because of an error in the price on our App, we will inform you of this by e-mail and we will not process your order. If you have already paid for the Products, we will refund you the full amount as soon as possible.</p><br>
                    <p class="gray-color pr-text-2">3.3           In general and unless otherwise agreed, we will take payment from you by credit or debit card at the time you place a purchase instruction and we will then make the relevant payment on your behalf to the third party supplier. If any refund becomes due from the third party supplier then that refund may therefore be made to us in which case we will use all reasonable endeavours to refund that money promptly to you following receipt by us.</p><br>
                    <h5 class="title-page">4.Republic Of Ireland</h5>
                    <p class="gray-color pr-text-2">4.1           You cannot place orders for Products through the Online Shop from the Republic of Ireland.</p><br>
                    <br><br><h4 id="on28" class="title-page">SCHEDULE 4 – ADDITIONAL TERMS IN RELATION TO PRESCRIPTIONS</h4><br>
                    <h5 class="title-page">1.  PRESCRIBING DOCTORS</h5>
                    <p class="gray-color pr-text-2">1.1           In the United Kingdom, Services are provided by qualified doctors registered with the UK’s General Medical Council who are permitted to prescribe medicines without meeting the patient face to face. The registration numbers with the General Medical Council of each doctor who is or was in the past registered with this service to provide prescriptions can be supplied upon request to the Company. All doctors who have signed up to provide prescriptions through the Company’s systems have undertaken to comply with the General Medical Council Guidelines on remote prescribing, essential standards of quality and safety as enforced by the Care Quality Commission and copies of these can be found at http://www.cqc.org.uk.</p><br>
                    <p class="gray-color pr-text-2">1.1           In the Republic of Ireland, Services are provided by qualified doctors registered with the Medical Council of Ireland (IMC) who are permitted to prescribe medicines without meeting the patient face to face. The registration numbers with the Medical Council of each doctor who is or was in the past registered with this service to provide prescriptions can be supplied upon request to the Company. All doctors who have signed up to provide prescriptions through the Company’s systems have undertaken to comply with the Medical Council Guide to Professional Conduct and Ethics for Registered Medical Practitioners Seventh Edition 2009 and clinical best practice in Ireland. Copies of the Guide to Professional Conduct and Ethics for Registered Medical Practitioners can be found at http://www.medicalcouncil.ie.</p><br>
                    <h5 class="title-page">2. COLLECTION OR DELIVERY OF PRESCRIPTIONS</h5>
                    <p class="gray-color pr-text-2">2.1           From time to time, and subject to a range of factors including (without limitation) the nature of the items specified in a prescription and the availability of Affiliates, the App may enable you to: (i) request that a prescription be sent to your address, for you to fulfil at a pharmacy; (ii) request that the Company sends your prescription to a pharmacy near to you, for you to collect and fulfil during normal opening hours; or (iii) in the United Kingdom only request that one of our Affiliates fulfil the prescription and mail the prescribed articles to you.</p><br>
                    <p class="gray-color pr-text-2">2.2           If you choose to collect your own prescribed medication and to have the prescription sent to your address, the Company will use reasonable efforts to send to your address a prescription which should be acceptable in a recognised pharmacy.</p><br>
                    <p class="gray-color pr-text-2">2.3           If you choose to have your prescription sent to a pharmacy that is near to your location, to enable you to request the applicable medication at that pharmacy, the Company will use reasonable efforts to determine an appropriate pharmacy in the vicinity based on the location of your mobile device and will send to that pharmacy a prescription and will notify you of the address of the pharmacy.</p><br>
                    <p class="gray-color pr-text-2">2.4           Please note that the Company will use reasonable efforts to deliver the prescription to your device or to a nearby pharmacy promptly but that the Company is not connected with and has no control over or responsibility for any individual pharmacy, their policies in relation to acceptance or otherwise of prescriptions, opening hours or availability.  There are a number of factors which may impact on which pharmacy is chosen and there can be no guarantee that a pharmacy to which the prescription is delivered (if that option is chosen) will be the nearest pharmacy.</p><br>
                    <p class="gray-color pr-text-2">2.5           If, within the App, you choose to order your prescription medication for delivery to you, it will be despatched by our Affiliate dispensing chemist. The terms of delivery shall be as follows:</p><br>
                    <p class="gray-color pr-text-2">(a)        we will use reasonable endeavours to procure the processing and despatch of your prescription within 4 business days where the medication is in stock;</p><br>
                    <p class="gray-color pr-text-2">(b)        the delivery time following despatch should typically not exceed 3 business days but please note that in relation to delivery to remote locations that delivery time could be longer;</p><br>
                    <p class="gray-color pr-text-2">(c)        prices and delivery fees are displayed within the App at the time of the order;</p><br>
                    <p class="gray-color pr-text-2">(d)        delivery will be either by express delivery or refrigerated express delivery depending on the item;</p><br>
                    <p class="gray-color pr-text-2">(e)        medications are personal to the person for whom they are intended and therefore may not be returned and no refunds will be given for medications ordered once the order is placed;</p><br>
                    <p class="gray-color pr-text-2">(f)          orders may be subject to a minimum price as displayed in the App;</p><br>
                    <p class="gray-color pr-text-2">(g)        our Affiliate dispensing chemist and/or the Company may at its discretion refuse to fulfil an order where it considers the order not to be in the best interests of the person for whom it is intended or who has ordered it or may be illegal or contrary to any regulation or guideline;</p><br>
                    <p class="gray-color pr-text-2">(h)        third party despatch companies will be used to deliver any orders and neither the Company nor the dispensing chemist are liable for any error or delay of the despatch company; and</p><br>
                    <p class="gray-color pr-text-2">(i)          if no one is available to take delivery of the order when delivery is first attempted, there may be a delay in delivery, and/or the recipient may have to follow the procedures of the relevant despatch company in order to collect the order, including picking it up from a depot.</p><br>
                    <p class="gray-color pr-text-2">You cannot order prescription medication for delivery to you in the Republic of Ireland.</p><br>
                    <h5 class="title-page">3.  THE COMPANY’S RELATIONSHIP WITH THE DISPENSING PHARMACY</h5>
                    <p class="gray-color pr-text-2">3.1           From time to time the Company has arrangements in place with Affiliate dispensing chemist/s in relation to orders placed through the for the fulfilment of prescriptions and associated delivery of medication. The dispensing chemist is a separate entity from the Company and to the extent permitted by law the Company disclaims any liability for any acts or omissions of the dispensing chemist.  From time to time the Company may enter into arrangements with other dispensing chemists.</p><br>
                    <h5 class="title-page">4.  Republic Of Ireland</h5>
                    <p class="gray-color pr-text-2">4.1           You cannot place orders through the App for the fulfilment of prescriptions and associated delivery of medication in the mail to you in the Republic of Ireland.</p><br>
                    <br><br><h4 id="on29" class="title-page">SCHEDULE 5 – TESTING (PATHOLOGY) SERVICES</h4><br>
                    <h5 class="title-page">1.  PARTNER LABORATORY</h5>
                    <p class="gray-color pr-text-2">1.1           All testing (pathology) Services ordered through the App will be provided in conjunction with an Affiliate laboratory with which the Company has entered into arrangements for those Services.</p><br>
                    <p class="gray-color pr-text-2">1.2           From time to time the Company may have arrangements in place with Affiliate laboratories that provide testing Services in relation to orders placed through the App. The Affiliate laboratory is a separate entity from the Company and to the extent permitted by law the Company disclaims any liability for any acts or omissions of the partner laboratory.</p><br>
                    <p class="gray-color pr-text-2">1.3           By ordering any testing Services, you agree to comply with any instructions provided in relation to the testing Services including (without limitation) in relation to the booking and administration of tests, receipt and provision of test materials and samples (including delivery by post or attendance in person at test facilities) and payment.</p><br>
                    <h5 class="title-page">2.  ORDERING TESTING SERVICES</h5>
                    <p class="gray-color pr-text-2">2.1           Subject to Clause 2.2 below, in relation to the supply of testing Services, from time to time and subject to a range of factors including (without limitation) the nature of the relevant test, your location and the availability of Affiliates, the App may enable you to: (i) request the despatch, by post, of a test to be administered (self-collected) by you and returned to the laboratory by post, with the results then analysed, sent to the Company and delivered to you through the App; or (ii) arrange an appointment to attend a testing centre for the test to be undertaken, the results to be sent to the Company and delivered to you through the App; or (iii) contact a testing centre, to enable you to arrange to undertake a test independently and have the results sent to the Company to be delivered through the App; or (iv) request, at your address, the attendance of a Nurse who will visit you to administer the test (a ‘Nurse Call-Out’), (this Service is only available within the M25 London, encircled area at present) after which the results will be analysed and delivered to you through the App. Depending upon the type of test and other factors, one or more of these options may not be available and, for the avoidance of doubt, the Company does not guarantee to provide a testing Service.</p><br>
                    <p class="gray-color pr-text-2">2.2           You understand and acknowledge that prior to test results being made available to you within the App, you may be requested to undertake and pay for an additional consultation with a Practitioner.</p><br>
                    <p class="gray-color pr-text-2">2.3           The prices will be displayed within the App and you agree to those at the time of ordering. Certain pathology Services – for example, if you elect to contact a testing centre to undertake a test independently - may incur charges in addition to those listed in the App and you acknowledge and agree that such additional fees as required may be payable.</p><br>
                    <p class="gray-color pr-text-2">2.4           If, within the App, you choose to order your test for delivery to you and administration (self-collection) by you, it will be despatched by our Affiliate laboratory. The terms of delivery shall be as follows:</p><br>
                    <p class="gray-color pr-text-2">(a)        we will use reasonable endeavours to procure the processing and despatch of your test within 3 business days where the test is in stock;</p><br>
                    <p class="gray-color pr-text-2">(b)        the delivery time following despatch should typically not exceed 3 business days but please note that in relation to delivery to remote locations that delivery time could be longer;</p><br>
                    <p class="gray-color pr-text-2">(c)        prices and delivery fees are displayed within the App at the time of the order;</p><br>
                    <p class="gray-color pr-text-2">(d)        delivery will be either by express delivery or refrigerated express delivery, depending on the test;</p><br>
                    <p class="gray-color pr-text-2">(e)        tests are personal to the person for whom they are intended and therefore may not be returned and no refunds will be given for tests ordered once the order is placed;</p><br>
                    <p class="gray-color pr-text-2">(f)          orders may be subject to a minimum price as displayed in the App;</p><br>
                    <p class="gray-color pr-text-2">(g)        our Affiliate laboratory and/or the Company may at its discretion refuse to fulfil an order where it considers the order not to be in the best interests of the person for whom it is intended or who has ordered it or may be illegal or contrary to any regulation or guideline;</p><br>
                    <p class="gray-color pr-text-2">(h)        third party despatch companies will be used to deliver any orders and neither the Company nor the laboratory are liable for any error or delay of the despatch company; and</p><br>
                    <p class="gray-color pr-text-2">(i)          if no one is available to take delivery of the order when delivery is first attempted, there may be a delay in delivery, and/or the recipient may have to follow the procedures of the relevant despatch company in order to collect the order, including picking it up from a depot.</p><br>
                    <p class="gray-color pr-text-2">2.5           Processing time for a returned test will vary depending on the test but the Company will use reasonable endeavours to procure that the laboratory analyses the test and returns results within 14 business days. Results will be delivered to you through the App and you explicitly consent to that by ordering through the App.</p><br>
                    <p class="gray-color pr-text-2">2.6           Tests to be administered at a drop in testing centre will be subject to the terms and conditions of that centre and the opening hours of that centre.</p><br>
                    <p class="gray-color pr-text-2">2.7           If a Nurse Call Out (as defined in clause 2.1) is ordered, the Company will use reasonable efforts to procure that a Nurse is available to attend at an agreed time within 10 business days and paragraphs 2.3(e), (f), (g), (h), and (i), shall also (without limitation) apply.</p><br>
                    <p class="gray-color pr-text-2">2.8           If, per clause 2.1, you elect to arrange an appointment to attend a testing centre for the test to be undertaken, or to contact a testing centre to enable you to arrange to undertake a test independently, then the Company shall use reasonable efforts to assist you but the Company cannot guarantee the availability of the Services from its Affiliates and shall not be liable for any acts or omissions of the Affiliate(s).</p><br>
                    <p class="gray-color pr-text-2">2.9           The Company will use reasonable efforts to process any orders for testing Services within 2 business days and the time limits set out above start running from the end of that processing period.</p><br>
                    <p class="gray-color pr-text-2">2.10        It may not be appropriate for some tests to be self administered, in which case they may not be available for delivery and must be conducted by a registered medical practitioner or Nurse.</p><br>
                    <h5 class="title-page">3. Republic Of Ireland</h5>
                    <p class="gray-color pr-text-2">3.1           You cannot order testing (pathology) Services through the babyl app from the Republic of Ireland. If tests are required, the babyl GP with advise and will refer the patient to their own GP to manage the pathology request.</p><br>
                    <br><br><h4 id="on30" class="title-page">SCHEDULE 6 – MONITOR ME</h4><br>
                    <h5 class="title-page">1. PERMITTED USE</h5>
                    <p class="gray-color pr-text-2">1.1           The purpose of the Monitor Me part of the App is to display data resulting from clinical investigation, other clinical data and other fitness and wellness related data regarding you.</p><br>
                    <p class="gray-color pr-text-2">1.2           Data may be inputted into Monitor Me: (i) manually by the User, (ii) through third party devices or data streams which connect with the App, and (iii) via data received from or inputted via other parts of the App, for example as a result of undertaking a test, prescription or a consultation. Please note that Monitor Me provides for the display of data only, is limited to the receipt of data from the above sources, does not provide diagnostic or other advice or recommendations and does not provide a complete or up to date record of your health at any given time.</p><br>
                    <p class="gray-color pr-text-2">1.3           It is your responsibility to update the data stored in Monitor Me and to ensure that it is current and up to date. The Company does not accept any responsibility to update or monitor the data in any User’s account nor does it accept responsibility for ensuring that all activity through the App is logged in Monitor Me.</p><br>
                    <p class="gray-color pr-text-2">1.4           Monitor Me may make use of data feeds from third party providers, including third party providers to which you provide access. You acknowledge and agree that available data feeds may vary from time to time, that the Company makes no guarantee that any particular data feed will be available or available at a particular time, that data feeds may require your authorisation in order to be accessible to you via the App, that the Company will have access to and may store data feeds and data to which you authorise access.</p><br>
                    <p class="gray-color pr-text-2">1.5           Monitor Me is not a medical device nor should it be used for diagnosis or treatment of any condition. It is intended as an information aid only.</p><br>
                    <p class="gray-color pr-text-2">1.6           Monitor Me may display certain information relating to a user derived from data stored for that user (for example, body mass index) and recognised guidelines. You should note however that any such display or information provided is based on generic data and assumptions and is not designed to be and may not be used for personalised advice regarding any particular User or any particular User’s circumstances. It should therefore be treated as a general guide and is not a substitute for personal medical advice or diagnosis. It will in addition be based on a number of assumptions that may or may not be accurate or applicable to any particular User. No responsibility is taken for any action or omission that a User may take based on in connection with or in reliance upon any information shown in Monitor Me.</p><br>
                    <p class="gray-color pr-text-2">1.7           The Company reserves the right to delete any Monitor Me account or data display at any time without liability to the User.</p><br>
                    <h5 class="title-page">2. Republic Of Ireland</h5>
                    <p class="gray-color pr-text-2">2.1           Monitor Me is not available for use by residents of the Republic of Ireland.</p><br>
                    <p class="gray-color pr-text-2"></p><br>
                    <br><br><h4 id="on31" class="title-page">SCHEDULE 7 - Check a symptom</h4><br>
                    <p class="gray-color pr-text-2">These terms include descriptions of each section, in bold text. These descriptions are to help you understand the terms but they are not part of the terms. </p><br>
                    <h5 class="title-page">1. The Terms And This Schedule</h5>
                    <p class="gray-color pr-text-2">The purpose of these terms, and how they relate to babyl's other terms and conditions.</p><br>
                    <p class="gray-color pr-text-2">The terms in this Schedule apply to the babyl "CHECK" app which is referred to in this Schedule as "the App". The rest of the Terms also apply to use of the App and references in those terms to "the App" are references to the "CHECK" app in the context of this Schedule.</p><br>
                    <h5 class="title-page">2. Operating System Requirements</h5>
                    <p class="gray-color pr-text-2">The technical requirements for using the App.</p><br>
                    <p class="gray-color pr-text-2">2.1 The App requires an iPhone version 4S or more recent, running iOS 8 or higher, or an Android smartphone running Android v4.2 or more recent ("Devices"), and a consistent 3G (or faster) data connection. For the avoidance of doubt, GPRS or EDGE connections are not suitable.</p><br>
                    <p class="gray-color pr-text-2">2.2 We recommend that if you are using a wireless network to access the App, you avoid use of public wi-fi facilities in favour of a personal wi-fi connection, and that the wireless network is secured with WPA-2 security. We recommend that the Device from which you access the App is password protected, set to lock after a short period of inactivity, and protected with suitable anti-virus and anti-malware software.</p><br>
                    <p class="gray-color pr-text-2">2.3 From time to time, updates to the App may be made available to you. We recommend that you use the latest version of the App at all times, to take advantage of the latest enhancements.</p><br>
                    <h5 class="title-page">3. Acknowledgements</h5>
                    <p class="gray-color pr-text-2">The App includes software and content which the Company does not provide.</p><br>
                    <p class="gray-color pr-text-2">3.1 If any open-source software is included in the App or any Service, the terms of an open-source licence may override some of the terms of this end user licence.</p><br>
                    <p class="gray-color pr-text-2">3.2 The App may contain links to other independent third-party websites ("Third-party Sites"). Third-party Sites are not under our control, and we are not responsible for and do not endorse their content or their privacy policies (if any). You will need to make your own independent judgement regarding your interaction with any Third-party Sites, including the purchase and use of any products or services accessible through them.</p><br>
                    <h5 class="title-page">4. Your Use Of The App</h5>
                    <p class="gray-color pr-text-2">What the App does, and what you can rely on it to provide. Also, when you shouldn't use the App.</p><br>
                    <p class="gray-color pr-text-2">4.1 The Company provides the App to you.</p><br>
                    <p class="gray-color pr-text-2">4.2 The App provides a symptom checking tool which provides you with a suggestion for where to seek care for diagnosis and treatment, based on the symptoms you enter. In some cases, particularly those that do not yet require seeking care from a healthcare provider, general healthcare advice, possible conditions, and non-prescribed treatments may be suggested. Any conditions suggested should not be considered as a definitive diagnosis as this can only be obtained after speaking to a suitably qualified healthcare professional. The aim is to enable you to identify the medical services or simple home treatment advice that most closely matches your needs, based on the information you enter into the App.</p><br>
                    <p class="gray-color pr-text-2">4.3 The suggestions provided are only valid for immediate action. If you delay immediate action for any reason, you will need to enter new information into the App which should represent correct information at the time of data entry rather than historical information based on how you were feeling the previous time you entered the information. This is very important, as the advice the App provides is based on the information you enter, and your symptoms are likely to change over time and you may develop new symptoms.</p><br>
                    <p class="gray-color pr-text-2">4.4 The suggestions provided do not cover all clinical situations, including but not limited to those listed in paragraph 4.6. Suggestions provided are dependent on the body part selected. You are responsible for the selection of body parts in the App and the Company cannot be held liable for any adverse event resulting from advice provided for an inappropriately selected body part or by using the suggested outcome for conditions not covered by the App, including but not limited to those listed in paragraph 4.6.</p><br>
                    <p class="gray-color pr-text-2">4.5 The App is not a medical consultation and does not provide a definitive diagnosis or any prescribed treatment. It suggests healthcare providers or non-prescribed treatment that may suit your current healthcare needs. If you require a medical consultation, you should consult a healthcare professional and not use the App. You can obtain remote medical consultations by subscribing to the Company's babyl app.</p><br>
                    <p class="gray-color pr-text-2">4.6 The app is not designed for use:</p><br>
                    <p class="gray-color pr-text-2">4.6.1 by anyone under 16;</p><br>
                    <p class="gray-color pr-text-2">4.6.2 outside the United Kingdom;</p><br>
                    <p class="gray-color pr-text-2">4.6.3 by pregnant women;</p><br>
                    <p class="gray-color pr-text-2">4.6.4 by people who have a chronic disease or condition;</p><br>
                    <p class="gray-color pr-text-2">4.6.5 by people who have recently had surgery;</p><br>
                    <p class="gray-color pr-text-2">4.6.6 by people who are generally unwell with co-existing illnesses or undiagnosed conditions (apart from the symptoms for which they are consulting the App).</p><br>
                    <p class="gray-color pr-text-2">You should not use the App if you fall into any of these categories.</p><br>
                    <p class="gray-color pr-text-2">4.7 The Company does not provide the medical services or treatment that the App may suggest, nor does it recommend any named provider or supplier of non-prescribed treatment. The providers of such services or treatments (and not the Company) are responsible to you for their services or treatments. You should always read the instruction label for any medications suggested before use. Do not take any medications if you have any concerns after reading the label. If you are unsure, consult a doctor before use.</p><br>
                    <p class="gray-color pr-text-2">4.8 In cases where the App suggests seeking further care, you are responsible for making appointments, and ensuring these occur within the recommended time frame. The first available appointment within a recommended time frame is advised in all circumstances. If you are advised to use a health service "as soon as possible", this is intended to mean within the next few days. Where a babyl appointment is recommended, and you are not able to book this for any reason, you should seek care from an alternative provider such as your NHS GP.</p><br>
                    <h5 class="title-page">5. Our Use Of Data And Permissions</h5>
                    <p class="gray-color pr-text-2">How the App uses your information.</p><br>
                    <p class="gray-color pr-text-2">5.1 The babyl privacy policy applies to your use of the App and our collection and use of data you enter into the App.</p><br>
                    <p class="gray-color pr-text-2">5.2 In particular, by using the App, you consent to us collecting and using technical information about your Device and related software, hardware and peripherals for the App and any Services that are internet-based or wireless to improve the App, our products and to provide any Services to you.</p><br>
                    <p class="gray-color pr-text-2">5.3 The App makes sure of location data sent from the Devices. It will not function properly unless your Device has location services turned on. If you use the App, you consent to us and our Affiliates' and licensees' transmission, collection, maintenance, processing and use of your location data and queries to provide App functionality and improve location-based products and services.</p><br>
                    <p class="gray-color pr-text-2">5.4 We will store data regarding your symptoms that you enter into the App as part of your medical records including records kept as part of your use of our consultation Services. This will be visible to a babyl clinician within your medical record if you have a consultation for any reason.</p><br>
                    <p class="gray-color pr-text-2">5.5 We also use your data for research and quality assurance purposes, and to develop other products and services. However, it is anonymised before any such use is made so that you cannot be identified.</p><br>
                    <p class="gray-color pr-text-2"></p><br>
                    <h5 id="on32" class="title-page">NHS Terms and Conditions</h5>
                    <p class="gray-color pr-text-2">•  As an NHS patient the babyl service will be provided at no charge to you so long as you remain registered with the GP practices specified:</p><br>
                    <p class="gray-color pr-text-2">Highlands Surgery, 1643 London Road, Southend-on-Sea, Leigh-on-Sea, Southend-on-Sea, SS9 2SQ</p><br>
                    <p class="gray-color pr-text-2">Eastwood Group Practice Branches:</p><br>
                    <p class="gray-color pr-text-2">Rayleigh Road Eastwood Branch, 348 Rayleigh Road, Eastwood, Essex, SS9 5PU</p><br>
                    <p class="gray-color pr-text-2">Kent Elms Branch,1 Rayleigh Road, Leigh-on-Sea, Essex, SS9 5UU</p><br>
                    <p class="gray-color pr-text-2">Belfairs Branch, 335 Eastwood Road North, Leigh-on-Sea, Essex, SS9 4LT</p><br>
                    <p class="gray-color pr-text-2">•  To ensure continuity of care with your NHS GP, all consultation notes undertaken with a babyl GP will be automatically sent to your NHS practice to be included in your medical records.</p><br>
                    <p class="gray-color pr-text-2">•  The babyl service is restricted to primary care services only. Diagnostics and referrals to secondary care services will be referred back to your NHS GP for further management.</p><br>
                    <p class="gray-color pr-text-2">•  Not all features of the app will be provided to NHS patients on a free basis. This includes but is not limited to the monitor functionality where home tests are can be requested.</p><br>
                    <p class="gray-color pr-text-2">•  NHS patients are under no obligation to use the babyl service or any of the private features.</p><br>
                    <p class="gray-color pr-text-2">•  The babyl support number is charged at the standard rate for landlines and mobiles.</p><br>
                    <p class="gray-color pr-text-2">•  As a pilot service, only 6 pharmacies will be offered for the use of NHS prescriptions. Patients have no obligation to use the private prescription service.</p><br>
                    <p class="gray-color pr-text-2"></p><br>
                    <h5 id="on33" class="title-page">babyl Therapy terms & conditions</h5>
                    <p class="gray-color pr-text-2">Availability of service:</p><br>
                    <p class="gray-color pr-text-2">babyl therapy is currently available to UK residents only.</p><br>
                    <p class="gray-color pr-text-2">Payment:</p><br>
                    <p class="gray-color pr-text-2">All sessions are payable in advance of the consultation and at the time of booking. Please have your credit/debit card to hand when booking via the app. Sessions are £39 for a 50 minute consultation. Afterwards the therapist will spend 10 minutes writing brief notes which will be shared with you.</p><br>
                    <p class="gray-color pr-text-2">About the service:</p><br>
                    <p class="gray-color pr-text-2">Your comfort and safety in therapy is of utmost importance to us, please discuss with your therapist what you wish to gain from therapy during each session. Progress will be monitored throughout the duration of therapy.</p><br>
                    <p class="gray-color pr-text-2">A full recording of your session is stored in your Clinical Records. All recordings are encrypted and accessible only to you and restricted members of the babyl senior clinical management team managing your care, for the purpose of ensuring exceptional quality of service.</p><br>
                    <p class="gray-color pr-text-2">You have to be 18 years and over to access the babyl Therapy service.</p><br>
                    <p class="gray-color pr-text-2">Brief notes may be taken during the session by the therapist and these will be available in the app for you to read. They will be short and factual. Notes will be accessible by a babyl GP if you have future GP consultations. Notes will not be shared with third parties during or after therapy has been completed.</p><br>
                    <p class="gray-color pr-text-2">All sessions are strictly confidential. All information will remain confidential within babyl unless both the client and therapist agree to discuss something with a third party. The only circumstance where confidentiality might be broken would be if there was a serious risk to the client's life or if another person's life was at risk; alternatively, in the rare instance where the therapist was liable to civil or criminal court proceedings if they did not disclose client information. If at all possible this would be discussed at length with the client beforehand.</p><br>
                    <p class="gray-color pr-text-2">babyl holds all records securely and ensures the utmost confidentiality in the treatment of any information held about its clients.</p><br>
                    <p class="gray-color pr-text-2">No information will be discussed without the client's written permission, except under certain rare legal circumstances (e.g. Child Protection).</p><br>
                    <p class="gray-color pr-text-2">Consultation notes and videos can be reviewed by babyl's medical director and therapy service lead without restriction in compliance with our information governance policy.</p><br>
                    <p class="gray-color pr-text-2">Your consultations are available for playback within the app. To help us protect the privacy and security of your information, you agree not to make independent recordings of consultations or to make recordings available in any other public domain.</p><br>
                    <p class="gray-color pr-text-2">babyl commits to permanent deletion of the data after a period of 10 years from the date of the cancellation request.</p><br>
                    <p class="gray-color pr-text-2">Cancellation:</p><br>
                    <p class="gray-color pr-text-2">If a client arrives under the influence of alcohol, drugs, or becomes abusive during the session, we reserve the right to cancel that session immediately and that session will still be charged for.</p><br>
                    <p class="gray-color pr-text-2">babyl has the right to cancel an appointment at short notice. Although this is very rare, as much notice as possible will be given. Your session will be re-booked at the next available appointment.</p><br>
                    <p class="gray-color pr-text-2">Cancellation and missed session policy: If you are unable to attend your appointment please let us know as soon as possible.</p><br>
                    <p class="gray-color pr-text-2">For therapy to be most effective, it is important to attend sessions regularly as agreed with your therapist. If you cancel more than 24 hours before your appointment, you will automatically be refunded. If you cancel less than 24 hours before your appointment then you will still be charged for this. If two or more sessions are missed/cancelled then we will contact you to discuss this. Future sessions may then be terminated.</p><br>
                    <p class="gray-color pr-text-2">If for any unforeseen circumstance your therapist needs to cancel your appointment, we will notify you as soon as possible and we will either rearrange this appointment for you or provide you with a refund.</p><br>
                    <p class="gray-color pr-text-2">babyl therapists:</p><br>
                    <p class="gray-color pr-text-2">babyl therapists all adhere to the BACP / BABCP / BPS / UKCP / HCPC code of Ethics for Counsellors and Psychotherapists. All babyl therapists are fully insured for professional liability and maintain regular supervision for all client work undertaken. babyl complies comply with the Data Protection Act 1988.</p><br>
                    <p class="gray-color pr-text-2">Counsellor Supervision:</p><br>
                    <p class="gray-color pr-text-2">Your babyl therapist may anonymously discuss your sessions with their clinical supervisor to help them improve the therapy they are offering and ensure you are kept safe. This is a requirement of all therapists as outlined by professional bodies. Supervisors also follow the code of conducts set out by their professional bodies and maintain confidentiality.</p><br>
                    <p class="gray-color pr-text-2">You are invited to view these terms and conditions when you register with babyl. You have every opportunity to view and discuss them before and during your therapy sessions and cannot, therefore, be disputed should they not be adhered to.</p><br>
                    <p id="on34" class="gray-color pr-text-2"></p><br>
                    <p class="gray-color pr-text-2">-       Healthcare Management Limited (HML), Occupational Health service is a third party provider, independent of babyl Healthcare Services.</p><br>
                    <p class="gray-color pr-text-2">-       HML bears sole responsibility for the provision and care of all users undertaking consultations relating to occupational health.</p><br>
                    <p class="gray-color pr-text-2">-       Practitioners of HML are independent of babyl Healthcare Services and therefore cannot guarantee in relation to, and is not responsible for the qualification of any practitioners or the suitability of any practitioner.</p><br>
                    <p class="gray-color pr-text-2">-       babyl Healthcare Service is responsible for the provision of the mobile platform to HML and manages the following features:</p><br>
                    <p class="gray-color pr-text-2">o   ASK</p><br>
                    <p class="gray-color pr-text-2">o   Monitor</p><br>
                    <p class="gray-color pr-text-2">o   Clinical Records</p><br>
                    <p class="gray-color pr-text-2">o   Tests & Kits</p><br>
                    <p class="gray-color pr-text-2">babyl’s normal terms and conditions apply to features stated above.</p><br>
                    <p class="gray-color pr-text-2">-       As an HML client, you are under no obligation to use the babyl healthcare service.</p><br>
                    <?php */ ?>
                    <p class="gray-color pr-text-2"></p><br>

                    <a href="#top" class="cd-top cd-is-visible cd-fade-out">Top</a>
                </div>
                <!-- <div class="col-md-2">
                </div> -->
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->


            <!-- Call to Action Well -->
            <!--<div class="row">
                <div class="col-lg-12">
                    <div class="well text-center">
                        This is a well that is a great spot for a business tagline or phone number for easy access!
                    </div>
                </div>
            </div>
            

            
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
                <div class="col-md-4">
                    <h2>Heading 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
                <div class="col-md-4">
                    <h2>Heading 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
            </div>-->
            <!-- /.row -->

            <!-- Footer -->

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