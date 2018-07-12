<?php
	define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
	define( 'IMAGES', TEMPPATH. "/img");
	
	add_theme_support('nav-menus');
	if ( function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'main' => 'Main Nav',
                'main-2' => 'Main Nav 2'
			)
		);
	}
	
	/*Adds Support for Featured Images**/
	if (function_exists('add_theme_support')) {
	    add_theme_support('post-thumbnails');
	    set_post_thumbnail_size( 220, 150 );
		/* resize uploaded image to the size needed in the theme */
		add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
		add_image_size( 'thumb-slide', 656, 351, true ); // Hard Crop Mode
		add_image_size( 'thumb-topads', 750, 100, true ); // Hard Crop Mode
		add_image_size( 'thumb-botads', 728, 90, true ); // Hard Crop Mode
		add_image_size( 'thumb-post', 765, 408, true ); // Hard Crop Mode
		add_image_size( 'thumb-list', 240, 130, true ); // Hard Crop Mode
		add_image_size( 'thumb-news', 180, 105, true ); // Hard Crop Mode
		add_image_size( 'thumb-sport', 235, 124, true ); // Hard Crop Mode
		add_image_size( 'thumb-bus', 365, 195, true ); // Hard Crop Mode
		add_image_size( 'thumb-adsse', 165, 350, true ); // Hard Crop Mode
		add_image_size( 'thumb-hpdr', 219, 274, true ); // Hard Crop Mode
		add_image_size( 'thumb-partner', 600, 600, true ); // Hard Crop Mode
		add_image_size( 'thumb-team', 480, 600, true ); // Hard Crop Mode
		add_image_size( 'thumb-model', 600, 300, true ); // Hard Crop Mode
		add_image_size( 'thumb-sads', 334, 9999 ); // Unlimited Height Mode
		/* End of resize uploaded image to the size needed in the theme */
	}

function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'page-scroll';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);


    /**
    * Enqueue custom scripts for OptionTree.
    */
    function bootstrap_scripts() {
        /* Register script */
        wp_register_script( 'bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js' );
        /* Enqueue script */
        wp_enqueue_script( 'bootstrap-scripts' );
    }
    add_action( 'admin_print_styles', 'bootstrap_scripts', 20 );
    /**
    * Enqueue custom styles for OptionTree.
    */
    function bootstrap_style() {
        /* Register Style */
        wp_register_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
        /* Enqueue Style */
        wp_enqueue_style( 'bootstrap-style' );
    }
    add_action( 'admin_print_styles', 'bootstrap_style', 20 );
    /**
    * Enqueue custom styles for OptionTree.
    */
    function ot_custom_style() {
        /* Register Style */
        wp_register_style( 'ot-custom-style', get_template_directory_uri() . '/css/ot-custom-style.css' );
        /* Enqueue Style */
        wp_enqueue_style( 'ot-custom-style' );
    }
    add_action( 'admin_print_styles', 'ot_custom_style', 20 );

	/* call sidebar */
	if( function_exists('register_sidebar')){
		register_sidebar( array(
			'name' => __('Primary Sidebar', 'primary-sidebar'),
			'id' => 'primary-widget-area',
			'description' => __('The primary widget area', 'dir'),
			'before_widget' => '<div class="widget">',
			'after_widget' => "</div>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}
	if( function_exists('register_sidebar')){
		register_sidebar( array(
			'name' => __('Other Sidebar', 'other-sidebar'),
			'id' => 'other-widget-area',
			'description' => __('The other widget area', 'dir'),
			'before_widget' => '<div class="widget">',
			'after_widget' => "</div>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}
	if( function_exists('register_sidebar')){
		register_sidebar( array(
			'name' => __('Home Sidebar', 'home-sidebar'),
			'id' => 'home-widget-area',
			'description' => __('The home widget area', 'dir'),
			'before_widget' => '<div id="home-add2" class="col-xs-12 col-md-2 col-lg-2 sm-hidden ipad-hidden nexus-hidden ipm-n-hidden">',
			'after_widget' => "</div>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}
	if( function_exists('register_sidebar')){
		register_sidebar( array(
			'name' => __('Top Adds Sidebar', 'top-adds-sidebar'),
			'id' => 'top-adds-widget-area',
			'description' => __('The top adds area', 'dir'),
			'before_widget' => '<div id="top-adds" class="col-lg-8 header-logo  text-right col-ipm-8">',
			'after_widget' => "</div>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}
	if( function_exists('register_sidebar')){
		register_sidebar( array(
			'name' => __('Bottom Adds Sidebar', 'bottom-adds-sidebar'),
			'id' => 'bottom-adds-widget-area',
			'description' => __('The bottom adds area', 'dir'),
			'before_widget' => '<div id="bottom-adds" class="col-sm-16 sm-p-right wow fadeInDown animated  animated" data-wow-delay="0.5s" data-wow-offset="25" style="visibility: visible; -webkit-animation-delay: 0.5s;">',
			'after_widget' => "</div>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}

	//require_once('post-manager.php');
	require_once('theme-options.php');/*
	require_once('director-widgets.php');
	*/
	add_action('init', 'babyl_rewrite');
	function babyl_rewrite() {
		global $wp_rewrite;
		$wp_rewrite->add_permastruct('typename', 'typename/%year%/%postname%/', true, 1);
		add_rewrite_rule('typename/([0-9]{4})/(.+)/?$','index.php?typename=$matches[2]', 'top');
		$wp_rewrite->flush_rules();
	}
	function babyl_excerpt_more($more) {
		return ' <a href="'. get_permalink() .'">Continue...</a>';
	}

	add_filter('excerpt_more', 'babyl_excerpt_more', 999);


	function custom_pagination($numpages = '', $pagerange = '', $paged='') {

	  	if (empty($pagerange)) {
	  		$pagerange = 2;
	 	}

	  	/**
	   	* This first part of our function is a fallback
	   	* for custom pagination inside a regular loop that
		* uses the global $paged and global $wp_query variables.
	   	* 
	   	* It's good because we can now override default pagination
	   	* in our theme, and use this function in default quries
	   	* and custom queries.
	   	*/
	  	global $paged;
	  	if (empty($paged)) {
	    	$paged = 1;
	  	}
	  	if ($numpages == '') {
	    	global $wp_query;
	    	$numpages = $wp_query->max_num_pages;
	    	if(!$numpages) {
	        	$numpages = 1;
	    	}
	  	}

	  	/** 
	   	* We construct the pagination arguments to enter into our paginate_links
	 	* function. 
	   	*/
	 	$pagination_args = array(
		    'base'            => get_pagenum_link(1) . '%_%',
		    'format'          => 'page/%#%',
		    'total'           => $numpages,
		    'current'         => $paged,
		    'show_all'        => False,
		    'end_size'        => 1,
		    'mid_size'        => $pagerange,
		    'prev_next'       => True,
		    'prev_text'       => __('&laquo;'),
		    'next_text'       => __('&raquo;'),
		    'type'            => 'plain',
		    'add_args'        => false,
		    'add_fragment'    => ''
	  	);

	  	$paginate_links = paginate_links($pagination_args);

	  	if ($paginate_links) {
	    	echo "<nav class='custom-pagination'>";
	      	echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
	      	echo $paginate_links;
	    	echo "</nav>";
	  	}

	}
	@ini_set( 'upload_max_size' , '1280M' );
	@ini_set( 'post_max_size', '1280M');
	@ini_set( 'max_execution_time', '900' );
?>