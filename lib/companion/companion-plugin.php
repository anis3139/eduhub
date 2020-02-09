<?php 

function jurist_register_my_cpts_section() {


	$labels = [
		"name" => __( "Sliders", "jurist" ),
		"singular_name" => __( "Slider", "jurist" ),
        
	];

	$args = [
		"label" => __( "Sliders", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "sliders", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "editor","thumbnail"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "slider", $args );

	

    
	$labels = [
		"name" => __( "Testimonials", "jurist" ),
		"singular_name" => __( "Testimonial", "jurist" ),
		"add_new" => __( "Add Testimonial", "jurist" ),
	];

	$args = [
		"label" => __( "Testimonials", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor","thumbnail"],
	];

	register_post_type( "eduhub_testimonials", $args );	
    
    
   $labels = [
		"name" => __( "Partners", "jurist" ),
		"singular_name" => __( "Partner", "jurist" ),
		"add_new" => __( "Add Image", "jurist" ),
		"featured_image" => __( "Pertner Image", "jurist" ),
		"set_featured_image" => __( "Add Pertner Image", "jurist" ),
	];

	$args = [
		"label" => __( "Partners", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "case-studies", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-image",
		"supports" => [ "title","thumbnail"],
	];

	register_post_type( "partners", $args );    
    
  $labels = [
		"name" => __( "FAQ", "jurist" ),
		"singular_name" => __( "FAQ", "jurist" ),
	];

	$args = [
		"label" => __( "FAQ", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "faq", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-thumbs-up",
		"supports" => [ "title", "editor"],
	];

	register_post_type( "faq", $args ); 
    
    
    /*
    $labels = [
		"name" => __( "Gallery", "jurist" ),
		"singular_name" => __( "Gallery Image", "jurist" ),
        "add_new"=>__("Add Image", "jurist"),
	];

	$args = [
		"label" => __( "Gallery", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "gallery", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "thumbnail","title"],
	];

	register_post_type( "gallery", $args ); 
    
    
    
    $labels = [
		"name" => __( "Booking", "jurist" ),
		"singular_name" => __( "Booking", "jurist" ),
        "add_new"=>__("Add Booking", "jurist"),
	];

	$args = [
		"label" => __( "Booking", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "booking", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-email-alt",
		"supports" => ["title"],
	];

	register_post_type( "booking", $args );    
    
    $labels = [
		"name" => __( "Featured Posts", "jurist" ),
		"singular_name" => __( "Featured Post", "jurist" ),
        "add_new"=>__("Add Featured Post", "jurist"),
	];

	$args = [
		"label" => __( "Featured Posts", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "featured", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-visibility",
		"supports" => [ "title", "editor","thumbnail"],
	];

	register_post_type( "featured", $args );*/
}
add_action( 'init', 'jurist_register_my_cpts_section' );