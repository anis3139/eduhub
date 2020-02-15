<?php 
require_once( get_theme_file_path("/lib/tgm-plugin/class-tgm-plugin-activation.php") );
require_once( get_theme_file_path("/inc/tgm.php") );
require_once( get_theme_file_path("/inc/customizer.php") );
require_once( get_theme_file_path("/inc/customizer-page.php") );
require_once( get_theme_file_path( "/lib/companion/companion-plugin.php" ) );
require_once( get_theme_file_path( "/lib/csf/cs-framework.php" ) );
require_once( get_theme_file_path( "/inc/mj-wp-breadcrumb/mj-wp-breadcrumb.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page-testimonials.php" ) );


define( 'CS_ACTIVE_FRAMEWORK', false ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', false ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', true ); // default true

if ( site_url() == "http://localhost" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}


function eduhub_theme_setup() {
	load_theme_textdomain( 'eduhub', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
    $eduhub_custom_header_details = array(
        'header-text'        => true,
        'default-text-color' => '#222',
        'width'              => 1200,
        'height'             => 600,
        'flex-height'        => true,
        'flex-width'         => true,
    );
    add_theme_support( "custom-header", $eduhub_custom_header_details );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'eduhub' ),
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list',
	) );
    $eduhub_custom_logo_defaults = array(
        "width"  => '100px',
        "height" => '60px',
    );
    add_theme_support( "custom-logo", $eduhub_custom_logo_defaults );
	add_theme_support( 'custom-background', apply_filters( 'eduhub_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    // custom Image size.
    add_image_size( "eduhub-blog-image", 400, 300,array("center","center"), true); 
}
add_action( 'after_setup_theme', 'eduhub_theme_setup' );
function eduhub_add_editor_styles() {
	add_editor_style( '/lib/custom-editor-style.css' );
}
add_action( 'admin_init', 'eduhub_add_editor_styles' );
function eduhub_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eduhub_content_width', 1170 );
}
add_action( 'after_setup_theme', 'eduhub_content_width', 0 );


function eduhub_assets(){
	wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900');
    wp_enqueue_style('google-fonts-swap','//fonts.googleapis.com/css?family=Fredericka+the+Great');    
	wp_enqueue_style('fonts-awesome','//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('iconic-bootstrap-css',get_theme_file_uri('/assets/css/open-iconic-bootstrap.min.css'));
	wp_enqueue_style('carousel-css',get_theme_file_uri('/assets/css/owl.carousel.min.css'));
    wp_enqueue_style('animate-css',get_theme_file_uri('/assets/css/animate.css'));
	wp_enqueue_style('theme-default-css',get_theme_file_uri('/assets/css/owl.theme.default.min.css'));
    wp_enqueue_style('magnific-css',get_theme_file_uri('/assets/css/magnific-popup.css'));
	wp_enqueue_style('ionicons-css',get_theme_file_uri('/assets/css/ionicons.min.css'));
    wp_enqueue_style('flaticon-css',get_theme_file_uri('/assets/css/flaticon.css'));
    wp_enqueue_style('icomoon-css',get_theme_file_uri('/assets/css/icomoon.css'));
    wp_enqueue_style('aos-css',get_theme_file_uri('/assets/css/aos.css'));
    wp_enqueue_style('eduhub-design-css',get_theme_file_uri('/assets/css/style.css'),null,VERSION);
	wp_enqueue_style('eduhub-css',get_stylesheet_uri(),null,VERSION);
    $heading_icon_color = get_theme_mod( 'eduhub_heading_color', '#dd2d6a' );
    $heading_title_color = get_theme_mod( 'eduhub_title_color', '#dd2d6a' );
    $heading_sub_title_color = get_theme_mod( 'eduhub_sub_title_color', '#000' );
    $heading_button_color = get_theme_mod( 'eduhub_button_color', '#fff' );
    $heading_button_bg_color = get_theme_mod( 'eduhub_button_bg_color', '#fda638' );
    $about_section_icon_bg = get_theme_mod( 'eduhub_about_section_bg', '#1EAAF1' );
	$heading_style      = <<<EOD
 .heading-section h2 {
    color: {$heading_icon_color};
}
.owl-carousel.home-slider .slider-item .slider-text h1{
    color: {$heading_title_color};
}
.owl-carousel.home-slider .slider-item .slider-text p{
    color: {$heading_sub_title_color};
}
 .btn.btn-secondary{
    color: {$heading_button_color};
} 
.btn.btn-secondary{
    background: {$heading_button_bg_color};
    border: {$heading_button_bg_color};
	
}
.btn.btn-secondary:hover, .btn.btn-secondary:focus, .btn.btn-secondary:active {
    border: {$heading_button_bg_color};
	 color: {$heading_button_color};
}
.services-2 .icon{
    background: {$about_section_icon_bg};
	 color: {};
}
EOD;

	wp_add_inline_style( 'eduhub-css', $heading_style );
	
	
	
	
	
	
    
	wp_enqueue_script('jquery-js',get_theme_file_uri('/assets/js/jquery.min.js'),null,'default',true);
	wp_enqueue_script('bootstrap-js',get_theme_file_uri('/assets/js/bootstrap.min.js'),['jquery'],'default',true);
	wp_enqueue_script('migrate-js',get_theme_file_uri('/assets/js/jquery-migrate-3.0.1.min.js'),['jquery'],'default',true);
	wp_enqueue_script('carousel-js',get_theme_file_uri('/assets/js/owl.carousel.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('easing-js',get_theme_file_uri('/assets/js/jquery.easing.1.3.js'),['jquery'],VERSION,true);
    wp_enqueue_script('popper-js',get_theme_file_uri('/assets/js/popper.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('waypoints-js',get_theme_file_uri('/assets/js/jquery.waypoints.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('stellar-js',get_theme_file_uri('/assets/js/jquery.stellar.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('magnific-js',get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('aos-js',get_theme_file_uri('/assets/js/aos.js'),['jquery'],VERSION,true); 
    wp_enqueue_script('animateNumber-js',get_theme_file_uri('/assets/js/jquery.animateNumber.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('scrollax-js',get_theme_file_uri('/assets/js/scrollax.min.js'),['jquery'],VERSION,true);   
      
          
    wp_enqueue_script('faq-js',get_theme_file_uri('/assets/js/faq.js'),['jquery'],VERSION,true);
    wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),['jquery'],VERSION,true);
	
	
	
	wp_enqueue_script( 'eduhub-reservation-js', get_template_directory_uri() . '/assets/js/reservation.js', array( 'jquery' ), VERSION, true );
		$ajaxurl = admin_url( 'admin-ajax.php' );
		wp_localize_script( 'eduhub-reservation-js', 'eduhuburl', array( 'ajaxurl' => $ajaxurl ) );
	
	
	
	
	
	
	
	
	
   
}
add_action('wp_enqueue_scripts','eduhub_assets');

function eduhub_customizer_assets() {
	wp_enqueue_script( "eduhub-customizer-js", get_theme_file_uri( "/assets/js/customizer.js" ), array(
		'jquery',
		'customize-preview'
	), time(), true );
	wp_enqueue_script( "eduhub-customizer-about-js", get_theme_file_uri( "/assets/js/customizer-page.js" ), array(
		'jquery',
		'customize-preview'
	), time(), true );
}

add_action( "customize_preview_init", 'eduhub_customizer_assets' );



function eduhub_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Single page Sidebar', 'eduhub' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eduhub' ),
		'before_widget' => '<section id="%1$s" class="p-2 widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'eduhub' ),
		'id'            => 'sidebar-blog',
		'description'   => esc_html__( 'Add widgets here.', 'eduhub' ),
		'before_widget' => '<div id="%1$s" class="p-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title text-light">',
		'after_title'   => '</h3>',
	) );
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar one', 'eduhub' ),
		'id'            => 'footer-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eduhub' ),
		'before_widget' => '<div id="%1$s" class="pl-2 list-unstyled text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading mb-4 text-light widget-title">',
		'after_title'   => '</h3>',
	) );
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Two', 'eduhub' ),
		'id'            => 'footer-sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'eduhub' ),
		'before_widget' => '<div id="%1$s" class="list-unstyled pl-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading mb-4 text-light widget-title">',
		'after_title'   => '</h3>',
	) );
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar three', 'eduhub' ),
		'id'            => 'footer-sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'eduhub' ),
		'before_widget' => '<div id="%1$s" class="pl-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title text-light">',
		'after_title'   => '</h3>',
	) );
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar four', 'eduhub' ),
		'id'            => 'footer-sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'eduhub' ),
		'before_widget' => '<div id="%1$s" class="pl-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading mb-4 text-light widget-title">',
		'after_title'   => '</h3>',
	) );   
    ;register_sidebar( array(
		'name'          => esc_html__( 'Google Map', 'eduhub' ),
		'id'            => 'google-map',
		'description'   => esc_html__( 'Add widgets here.', 'eduhub' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title mb-5">',
		'after_title'   => '</h3>',
	) );   
    ;register_sidebar( array(
		'name'          => esc_html__( 'Newsletter', 'eduhub' ),
		'id'            => 'newsletter',
		'description'   => esc_html__( 'Add Newsletter widgets here.', 'eduhub' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'eduhub_widgets_init' );
function eduhub_csf_init(){
    CSFramework_metabox::instance(array());
    CSFramework_Customize::instance(array());
}
add_action('init', 'eduhub_csf_init');
function eduhub_about_page_template_banner() {
    if ( is_page() ) {
        if ( current_theme_supports( "custom-header" ) ) {
            ?>
<style>
	.hero-wrap-2 {
		background-image: url(<?php echo header_image();
		?>);
		background-size: cover;
	}

</style>
<?php
        }
    }
}
add_action( "wp_head", "eduhub_about_page_template_banner", 11 );



function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".readmore."'>Continue Reading &raquo;</a>";
	echo $excerpt;
}


function eduhub_search_form( $form ) {
    $homedir      = home_url( "/" );
    $label        = __( "Search for:", "eduhub" );
    $button_label = __( "Search", "eduhub" );
    $newform = <<<FORM
<form role="search" method="get" class="search-form" action="{$homedir}">
    <label>
        <span class="hide-content">{$label}</span>
        <input type="search" class="form-control" placeholder="Type Keywords" value="" name="s"
               title="{$label}" autocomplete="off">
    </label>
    {$post_type}
    <input type="submit" class="btn btn-primary btn-sm" value="{$button_label}">
</form>
FORM;
    return $newform;
}
add_filter( "get_search_form", "eduhub_search_form" );








function eduhub_process_reservation() {

	if ( check_ajax_referer( 'reservation', 'rn' ) ) {
		$name    = sanitize_text_field( $_POST['name'] );
		$email   = sanitize_text_field( $_POST['email'] );
		$country = sanitize_text_field( $_POST['country'] );
		$phone   = sanitize_text_field( $_POST['phone'] );

		$data = array(
			'name'    => $name,
			'email'   => $email,
			'phone'   => $phone,
			'country' => $country,
			
		);
		//print_r( $data );

		$reservation_arguments = array(
			'post_type'   => 'reservation',
			'post_author' => 1,
			'post_date'   => date( 'Y-m-d H:i:s' ),
			'post_status' => 'publish',
			'post_title'  => sprintf( '%s - Apply for %s Email: %s Mobile Number: %s', $name, $country, $email, $phone),
			'meta_input'  => $data
		);

		$reservations = new WP_Query( array(
			'post_type'   => 'reservation',
			'post_status' => 'publish',
			'meta_query'  => array(
				'relation'    => 'OR',
				'email_check' => array(
					'key'   => 'email',
					'value' => $email
				),
				'date_check'  => array(
					'key'   => 'phone',
					'value' => $phone
				),
			)
		) );
		if ( $reservations->found_posts > 0 ) {
			echo 'Duplicate';
		} else {
			$wp_error       = '';
			wp_insert_post( $reservation_arguments, $wp_error );

			//transient check
			$reservation_count = get_transient('res_count')?get_transient('res_count'):0;
			//transient check end

			if ( ! $wp_error ) {

				$reservation_count++;
				set_transient('res_count',$reservation_count,0);
				echo "Successful";
			}
		}

	} else {
		echo 'Not allowed';
	}
	die();
}

add_action( 'wp_ajax_reservation', 'eduhub_process_reservation' );
add_action( 'wp_ajax_nopriv_reservation', 'eduhub_process_reservation' );



function eduhub_change_menu($menu){
	$reservation_count = get_transient('res_count')?get_transient('res_count'):0;
	if($reservation_count>0){
		$menu[13][0] = "Reservation <span class='awaiting-mod'>{$reservation_count}</span> ";
	}
	return $menu;
}
add_filter('add_menu_classes','eduhub_change_menu');

function eduhub_admin_scripts($screen){
	$_screen = get_current_screen();
	if('edit.php'==$screen && 'reservation'==$_screen->post_type){
		delete_transient('res_count');
	}
}
add_action('admin_enqueue_scripts','eduhub_admin_scripts');




// Add Menu Class li Tag
function tanem_menu_item_class($classes, $item)
{
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'tanem_menu_item_class', 10, 2);

// Add Menu Class a Tag
function add_link_atts($atts)
{
    $atts['class'] = "nav-link";
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts', 100, 1);




