<?php
	function setup_theme_admin_menu() {
	    // We will write the function contents very soon.
	    add_submenu_page('themes.php', 
	        'Babyl Theme Elements', 'Babyl Theme', 'manage_options', 
	        'babyl-theme-elements', 'theme_babyl_theme_settings'); 
			add_action( 'admin_init', 'babyl_register_setting' );
	}
	function babyl_register_setting() {
		//register our settings
		register_setting( 'babyl-settings-group', 'babyl_facebook' );
		register_setting( 'babyl-settings-group', 'babyl_twitter' );
		register_setting( 'babyl-settings-group', 'babyl_youtube' );
		register_setting( 'babyl-settings-group', 'babyl_rss' );
		register_setting( 'babyl-settings-group', 'babyl_logo' );
		register_setting( 'babyl-settings-group', 'babyl_analytics' );
	}
 	function theme_babyl_theme_settings() {
?>
    
	<div class="wrap">
		<h2>Babyl Theme Settings</h2>

		<form id="landingOptions" method="post" action="options.php">
			<?php settings_fields( 'babyl-settings-group' ); ?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Logo:</th>
					<td>
					<input type="text" name="babyl_logo" value="<?php print get_option('babyl_logo'); ?>" /><br/>
					*Upload using the Media Uploader and paste the URL here.
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Facebook Link:</th>
					<td>
						<input type="text" name="babyl_facebook" value="<?php print get_option('babyl_facebook'); ?>" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Twitter Link:</th>
					<td>
						<input type="text" name="babyl_twitter" value="<?php print get_option('babyl_twitter'); ?>" />
					</td>
				</tr>
				<tr>
					<th scope="row">YouTube Link:</th>
					<td>
						<input type="text" name="babyl_youtube" value="<?php print get_option('babyl_youtube'); ?>" />
					</td>
				</tr>
				<tr>
					<th scope="row">Display RSS Icon:</th>
					<td>
						<input type="checkbox" name="babyl_rss" <?php if(get_option('babyl_rss') == true){ print "checked"; } ?>  />
					</td>
				</tr>
				<tr>
					<th scope="row">Google Analytics Code:</th>
					<td>
						<textarea name="babyl_analytics"><?php print get_option('babyl_analytics'); ?></textarea>
					</td>
				</tr>      
			</table>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
			</p>

		</form>
	</div>
<?php

}
// This tells WordPress to call the function named "setup_theme_admin_menus"
// when it's time to create the menu pages.
add_action("admin_menu", "setup_theme_admin_menu");

?>
<?php
	function setup_theme_admin_menus() {
	    // We will write the function contents very soon.
	    add_submenu_page('themes.php', 
	        'Front Page Elements', 'Front Page', 'manage_options', 
	        'front-page-elements', 'theme_front_page_settings'); 
			add_action( 'admin_init', 'babyl_register_settings' );
	}
	function babyl_register_settings() {
		//register our settings
		register_setting( 'babyl-settings-group', 'homepage_background' );
		register_setting( 'babyl-settings-group', 'homepage_title' );
		register_setting( 'babyl-settings-group', 'homepage_description' );
		register_setting( 'babyl-settings-group', 'homepage_appstore' );
		register_setting( 'babyl-settings-group', 'homepage_google_play' );
		register_setting( 'babyl-settings-group', 'homepage_howitwork' );
		register_setting( 'babyl-settings-group', 'fst_link_title' );
		register_setting( 'babyl-settings-group', 'srd_link_title' );
		register_setting( 'babyl-settings-group', 'trd_link_title' );
        
		register_setting( 'babyl-settings-group', 'homepage_sec_2_title' );
		register_setting( 'babyl-settings-group', 'homepage_sec_2_desc' );
        
		register_setting( 'babyl-settings-group', 'homepage_sec_3_title' );
		register_setting( 'babyl-settings-group', 'homepage_sec_3_desc' );
		register_setting( 'babyl-settings-group', 'homepage_sec_3_link_title' );
		register_setting( 'babyl-settings-group', 'homepage_sec_3_link' );
        
		register_setting( 'babyl-settings-group', 'homepage_sec_4_title' );
		register_setting( 'babyl-settings-group', 'homepage_sec_4_desc' );
		register_setting( 'babyl-settings-group', 'homepage_serv_1_img' );
		register_setting( 'babyl-settings-group', 'homepage_serv_1_title' );
		register_setting( 'babyl-settings-group', 'homepage_serv_1_desc' );
		register_setting( 'babyl-settings-group', 'homepage_serv_1_desc_more' );
		register_setting( 'babyl-settings-group', 'homepage_serv_1_btn_title' );
		register_setting( 'babyl-settings-group', 'homepage_serv_1_btn_link' );
		register_setting( 'babyl-settings-group', 'homepage_serv_2_img' );
		register_setting( 'babyl-settings-group', 'homepage_serv_2_title' );
		register_setting( 'babyl-settings-group', 'homepage_serv_2_desc' );
		register_setting( 'babyl-settings-group', 'homepage_serv_2_desc_more' );
		register_setting( 'babyl-settings-group', 'homepage_serv_2_btn_title' );
		register_setting( 'babyl-settings-group', 'homepage_serv_2_btn_link' );
		register_setting( 'babyl-settings-group', 'homepage_serv_3_img' );
		register_setting( 'babyl-settings-group', 'homepage_serv_3_title' );
		register_setting( 'babyl-settings-group', 'homepage_serv_3_desc' );
		register_setting( 'babyl-settings-group', 'homepage_serv_3_desc_more' );
		register_setting( 'babyl-settings-group', 'homepage_serv_3_btn_title' );
		register_setting( 'babyl-settings-group', 'homepage_serv_3_btn_link' );
        
		register_setting( 'babyl-settings-group', 'homepage_quote' );
		register_setting( 'babyl-settings-group', 'testimonials_slug' );
        
		register_setting( 'babyl-settings-group', 'our_doctors' );
		register_setting( 'babyl-settings-group', 'our_doctors_desc' );
		register_setting( 'babyl-settings-group', 'our_doctors_slug' );
        
		register_setting( 'babyl-settings-group', 'about_us' );
		register_setting( 'babyl-settings-group', 'about_us_desc' );
		register_setting( 'babyl-settings-group', 'homepage_vision_mission' );
		register_setting( 'babyl-settings-group', 'homepage_vision_mission_img' );
		register_setting( 'babyl-settings-group', 'homepage_vision_mission_desc' );
		register_setting( 'babyl-settings-group', 'homepage_vision_mission_btn' );
		register_setting( 'babyl-settings-group', 'homepage_vision_mission_btn_link' );
		register_setting( 'babyl-settings-group', 'homepage_vision_mission_desc_more' );
		register_setting( 'babyl-settings-group', 'homepage_vision_mission_img_model' );
		register_setting( 'babyl-settings-group', 'homepage_our_team' );
		register_setting( 'babyl-settings-group', 'homepage_our_team_img' );
		register_setting( 'babyl-settings-group', 'homepage_our_team_desc' );
		register_setting( 'babyl-settings-group', 'homepage_our_team_btn' );
		register_setting( 'babyl-settings-group', 'homepage_our_team_btn_link' );
		register_setting( 'babyl-settings-group', 'homepage_our_team_desc_more' );
		register_setting( 'babyl-settings-group', 'homepage_our_team_img_model' );
		register_setting( 'babyl-settings-group', 'homepage_our_partners' );
		register_setting( 'babyl-settings-group', 'homepage_our_partners_img' );
		register_setting( 'babyl-settings-group', 'homepage_our_partners_desc' );
		register_setting( 'babyl-settings-group', 'homepage_our_partners_btn' );
		register_setting( 'babyl-settings-group', 'homepage_our_partners_btn_link' );
		register_setting( 'babyl-settings-group', 'homepage_our_partners_desc_more' );
		register_setting( 'babyl-settings-group', 'homepage_our_partners_img_model' );
        
		register_setting( 'babyl-settings-group', 'homepage_contact_us' );
		register_setting( 'babyl-settings-group', 'homepage_contact_us_desc' );
	}
 	function theme_front_page_settings() {
?>
    
	<div class="wrap">
		<h2 class="homepagetitle">Babyl Homepage Settings</h2>
        <form id="landingOptions" method="post" action="options.php">
                <?php settings_fields( 'babyl-settings-group' ); ?>
        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
            <ul id="myTabs" class="nav nav-tabs" role="tablist"> 
                <li role="presentation" class="active">
                    <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Home</a>
                </li> 
                <li role="presentation" class="">
                    <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Profile</a>
                </li> 
                <li role="presentation" class="">
                    <a href="#section3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Section 3</a>
                </li> 
                <li role="presentation" class="">
                    <a href="#section4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Section 4</a>
                </li> 
                <li role="presentation" class="">
                    <a href="#section5" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Section 5</a>
                </li> 
                <li role="presentation" class="">
                    <a href="#section6" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Section 6</a> 
                <li role="presentation" class="">
                    <a href="#section7" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Section 7</a>
                </li> 
                <li role="presentation" class="">
                    <a href="#section8" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Section 8</a>
                </li> 
                <li role="presentation" class="dropdown"> 
                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents"> 
                        <li>
                            <a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a>
                        </li> 
                        <li>
                            <a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a>
                        </li> 
                    </ul> 
                </li> 
            </ul> 
            <div id="myTabContent" class="tab-content"> 
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">

                        <div class="form-group">
                            <label for="">Baground image</label>
                            <input type="text" name="homepage_background" value="<?php print get_option('homepage_background'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">homepage title</label>
                            <textarea name="homepage_title" class="form-control"><?php print get_option('homepage_title'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Homepage description</label><?php
   /*$editor_settings =  array (
        'wpautop'             => true,
        'media_buttons'       => true,
        'default_editor'      => '',
        'drag_drop_upload'    => false,
        'textarea_name'       => $editor_id,
        'textarea_rows'       => 4,
        'tabindex'            => '',
        'tabfocus_elements'   => ':prev,:next',
        'editor_css'          => '',
        'editor_class'        => '',
        'teeny'               => true,
        'dfw'                 => false,
        '_content_editor_dfw' => false,
        'tinymce' => array('plugins' => 'fullscreen, wordpress, wplink, textcolor'),
        'teeny_mce_buttons' => array( 
    'bold', 'italic', 'underline', 'blockquote', 'strikethrough', 'bullist',   
    'numlist', 'alignleft', 'aligncenter', 'alignright', 'undo', 
    'redo', 'link', 'unlink', 'fullscreen'),
        'quicktags'           => true
    // a very minimal setup
,   'quicktags'     => array ( 'buttons' => 'strong,em,link' )
);
wp_editor( $content, $key, $editor_settings ); */?>
                            <textarea name="homepage_description" class="form-control"><?php print get_option('homepage_description'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">First link Title</label>
                            <input type="text" name="fst_link_title" value="<?php print get_option('fst_link_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Homepage appstore Link</label>
                            <input type="text" name="homepage_appstore" value="<?php print get_option('homepage_appstore'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Secord link Title</label>
                            <input type="text" name="srd_link_title" value="<?php print get_option('srd_link_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Homepage google play Link</label>
                            <input type="text" name="homepage_google_play" value="<?php print get_option('homepage_google_play'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Thrierd link Title</label>
                            <input type="text" name="trd_link_title" value="<?php print get_option('trd_link_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Homepage how it work Title</label>
                            <input type="text" name="homepage_howitwork" value="<?php print get_option('homepage_howitwork'); ?>" class="form-control" id="">
                        </div>




                </div> 
                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab"> 

                        <div class="form-group">
                            <label for="">Home page section 2 title</label>
                            <input type="text" name="homepage_sec_2_title" value="<?php print get_option('homepage_sec_2_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Home page section 2 Description</label>
                            <textarea name="homepage_sec_2_desc" class="form-control" id=""><?php print get_option('homepage_sec_2_desc'); ?></textarea>
                        </div>

                </div> 
                <div role="tabpanel" class="tab-pane fade" id="section3" aria-labelledby="profile-tab"> 

                        <div class="form-group">
                            <label for="">Home page section 3 title</label>
                            <input type="text" name="homepage_sec_3_title" value="<?php print get_option('homepage_sec_3_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Home page section 3 Description</label>
                            <textarea name="homepage_sec_3_desc" class="form-control" id=""><?php print get_option('homepage_sec_3_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Home page section 3 title link</label>
                            <input type="text" name="homepage_sec_3_link_title" value="<?php print get_option('homepage_sec_3_link_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Home page section 3 link</label>
                            <input type="text" name="homepage_sec_3_link" value="<?php print get_option('homepage_sec_3_link'); ?>" class="form-control" id="">
                        </div>

                </div> 
                <div role="tabpanel" class="tab-pane fade" id="section4" aria-labelledby="profile-tab"> 

                        <div class="form-group">
                            <label for="">Home page section 4 title</label>
                            <input type="text" name="homepage_sec_4_title" value="<?php print get_option('homepage_sec_4_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Home page section 4 Description</label>
                            <textarea name="homepage_sec_4_desc" class="form-control" id=""><?php print get_option('homepage_sec_4_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Service 1 image</label>
                            <input type="text" name="homepage_serv_1_img" value="<?php print get_option('homepage_serv_1_img'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>
                        <div class="form-group">
                            <label for="">Service 1 Title</label>
                            <input type="text" name="homepage_serv_1_title" value="<?php print get_option('homepage_serv_1_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Service 1 Description</label>
                            <textarea name="homepage_serv_1_desc" class="form-control" id=""><?php print get_option('homepage_serv_1_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Service 1 more Description</label>
                            <textarea name="homepage_serv_1_desc_more" class="form-control" id=""><?php print get_option('homepage_serv_1_desc_more'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Service 1 button Title</label>
                            <input type="text" name="homepage_serv_1_btn_title" value="<?php print get_option('homepage_serv_1_btn_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Service 1 button Link</label>
                            <input type="text" name="homepage_serv_1_btn_link" value="<?php print get_option('homepage_serv_1_btn_link'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Service 2 image</label>
                            <input type="text" name="homepage_serv_2_img" value="<?php print get_option('homepage_serv_2_img'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>
                        <div class="form-group">
                            <label for="">Service 2 Title</label>
                            <input type="text" name="homepage_serv_2_title" value="<?php print get_option('homepage_serv_2_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Service 2 Description</label>
                            <textarea name="homepage_serv_2_desc" class="form-control" id=""><?php print get_option('homepage_serv_2_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Service 2 more Description</label>
                            <textarea name="homepage_serv_2_desc_more" class="form-control" id=""><?php print get_option('homepage_serv_2_desc_more'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Service 2 button Title</label>
                            <input type="text" name="homepage_serv_2_btn_title" value="<?php print get_option('homepage_serv_2_btn_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Service 2 button Link</label>
                            <input type="text" name="homepage_serv_2_btn_link" value="<?php print get_option('homepage_serv_2_btn_link'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Service 3 image</label>
                            <input type="text" name="homepage_serv_3_img" value="<?php print get_option('homepage_serv_3_img'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>
                        <div class="form-group">
                            <label for="">Service 3 Title</label>
                            <input type="text" name="homepage_serv_3_title" value="<?php print get_option('homepage_serv_3_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Service 3 Description</label>
                            <textarea name="homepage_serv_3_desc" class="form-control" id=""><?php print get_option('homepage_serv_3_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Service 3 more Description</label>
                            <textarea name="homepage_serv_3_desc_more" class="form-control" id=""><?php print get_option('homepage_serv_3_desc_more'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Service 3 button Title</label>
                            <input type="text" name="homepage_serv_3_btn_title" value="<?php print get_option('homepage_serv_3_btn_title'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Service 3 button Link</label>
                            <input type="text" name="homepage_serv_3_btn_link" value="<?php print get_option('homepage_serv_3_btn_link'); ?>" class="form-control" id="">
                        </div>

                </div> 
                <div role="tabpanel" class="tab-pane fade" id="section5" aria-labelledby="profile-tab"> 

                        <div class="form-group">
                            <label for="">Home page quote</label>
                            <textarea name="homepage_quote" class="form-control" id=""><?php print get_option('homepage_quote'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Testimonials Slug</label>
                            <input type="text" name="testimonials_slug" value="<?php print get_option('testimonials_slug'); ?>" class="form-control" id="">
                        </div>
                </div> 
                <div role="tabpanel" class="tab-pane fade" id="section6" aria-labelledby="profile-tab"> 

                        <div class="form-group">
                            <label for="">Our doctors</label>
                            <input type="text" name="our_doctors" value="<?php print get_option('our_doctors'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Our doctors</label>
                            <textarea name="our_doctors_desc" class="form-control" id=""><?php print get_option('our_doctors_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Our doctors Slug</label>
                            <input type="text" name="our_doctors_slug" value="<?php print get_option('our_doctors_slug'); ?>" class="form-control" id="">
                        </div>
                </div> 
                <div role="tabpanel" class="tab-pane fade" id="section7" aria-labelledby="profile-tab"> 

                        <div class="form-group">
                            <label for="">About us</label>
                            <input type="text" name="about_us" value="<?php print get_option('about_us'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">About us Description</label>
                            <textarea name="about_us_desc" class="form-control" id=""><?php print get_option('about_us_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Vision and mission</label>
                            <input type="text" name="homepage_vision_mission" value="<?php print get_option('homepage_vision_mission'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Vision and mission image</label>
                            <input type="text" name="homepage_vision_mission_img" value="<?php print get_option('homepage_vision_mission_img'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>
                        <div class="form-group">
                            <label for="">Vision and mission Description</label>
                            <textarea name="homepage_vision_mission_desc" class="form-control" id=""><?php print get_option('homepage_vision_mission_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Vision and mission button</label>
                            <input type="text" name="homepage_vision_mission_btn" value="<?php print get_option('homepage_vision_mission_btn'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Vision and mission button link</label>
                            <input type="text" name="homepage_vision_mission_btn_link" value="<?php print get_option('homepage_vision_mission_btn_link'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Vision and mission Description model</label>
                            <textarea name="homepage_vision_mission_desc_more" class="form-control" id=""><?php print get_option('homepage_vision_mission_desc_more'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Vision and mission model image</label>
                            <input type="text" name="homepage_vision_mission_img_model" value="<?php print get_option('homepage_vision_mission_img_model'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>

                        <div class="form-group">
                            <label for="">Our Team</label>
                            <input type="text" name="homepage_our_team" value="<?php print get_option('homepage_our_team'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Our Team image</label>
                            <input type="text" name="homepage_our_team_img" value="<?php print get_option('homepage_our_team_img'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>
                        <div class="form-group">
                            <label for="">Our Team Description</label>
                            <textarea name="homepage_our_team_desc" class="form-control" id=""><?php print get_option('homepage_our_team_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Our Team button</label>
                            <input type="text" name="homepage_our_team_btn" value="<?php print get_option('homepage_our_team_btn'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Our Team button link</label>
                            <input type="text" name="homepage_our_team_btn_link" value="<?php print get_option('homepage_our_team_btn_link'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Our Team Description model</label>
                            <textarea name="homepage_our_team_desc_more" class="form-control" id=""><?php print get_option('homepage_our_team_desc_more'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Our Team model image</label>
                            <input type="text" name="homepage_our_team_img_model" value="<?php print get_option('homepage_our_team_img_model'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>

                        <div class="form-group">
                            <label for="">Our Partners</label>
                            <input type="text" name="homepage_our_partners" value="<?php print get_option('homepage_our_partners'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Our Partners image</label>
                            <input type="text" name="homepage_our_partners_img" value="<?php print get_option('homepage_our_partners_img'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>
                        <div class="form-group">
                            <label for="">Our Partners Description</label>
                            <textarea name="homepage_our_partners_desc" class="form-control" id=""><?php print get_option('homepage_our_partners_desc'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Our Partners button</label>
                            <input type="text" name="homepage_our_partners_btn" value="<?php print get_option('homepage_our_partners_btn'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Our Partners button link</label>
                            <input type="text" name="homepage_our_partners_btn_link" value="<?php print get_option('homepage_our_partners_btn_link'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Our Partners Description in model</label>
                            <textarea name="homepage_our_partners_desc_more" class="form-control" id=""><?php print get_option('homepage_our_partners_desc_more'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Our Partners model image</label>
                            <input type="text" name="homepage_our_partners_img_model" value="<?php print get_option('homepage_our_partners_img_model'); ?>" class="form-control" id="">*Upload using the Media Uploader and paste the URL here.
                        </div>

                </div> 
                <div role="tabpanel" class="tab-pane fade" id="section8" aria-labelledby="profile-tab"> 

                        <div class="form-group">
                            <label for="">Contact Us</label>
                            <input type="text" name="homepage_contact_us" value="<?php print get_option('homepage_contact_us'); ?>" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Contact Us Description</label>
                            <textarea name="homepage_contact_us_desc" class="form-control" id=""><?php print get_option('homepage_contact_us_desc'); ?></textarea>
                        </div>
                </div> 
                <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab"> <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p> 
                </div> 
                <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab"> <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p> 
                </div> 
            </div> 
        </div>

                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
                </p>

        </form>
    </div>

        
<?php

}
// This tells WordPress to call the function named "setup_theme_admin_menus"
// when it's time to create the menu pages.
add_action("admin_menu", "setup_theme_admin_menus");

?>