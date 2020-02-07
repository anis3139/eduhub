<?php

function eduhub_customizer_settings( $wp_eduhub ) {
 
 
  /**
	 * Front Page Settings
	 */
    
	$wp_eduhub->add_section( 'eduhub_front_page', array(
		'title'           => __( 'Front Page Settings', 'eduhub' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
    $wp_eduhub->add_setting( 'eduhub_mobile', array(
		'default'   => "008801816366535",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_mobile', array(
		'label'    => __( 'Phone', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_mobile',array(
		'selector'=>'#eduhub-mobile',
		'settings'=>'eduhub_mobile',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_mobile');
		}
	));     
    
    
    $wp_eduhub->add_setting( 'eduhub_mail', array(
		'default'   => "anis904692@gmail.com",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_mail', array(
		'label'    => __( 'Email', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_mail',array(
		'selector'=>'#eduhub-mail',
		'settings'=>'eduhub_mail',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_mail');
		}
	));
     

	$wp_eduhub->add_setting( 'jsocial_link_facebook', array(
		'default'   => "https://www.facebook.com/anis3139",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'jsocial_link_facebook', 
        array(
		'label'    => __( 'Facebook Link', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'url',

	) );
        

   
	$wp_eduhub->add_setting( 'jsocial_link_twitter', array(
		'default'   => "https://www.twitter.com/anis3139",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'jsocial_link_twitter', 
        array(
		'label'    => __( 'Twitter Link', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'url',

	) );

    
	$wp_eduhub->add_setting( 'jsocial_link_instagram', array(
		'default'   => "https://www.instagram.com/anis.arronno",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'jsocial_link_instagram', 
        array(
		'label'    => __( 'Instagram Link', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'url',

	) );
        
    

    
    
	$wp_eduhub->add_setting( 'jsocial_link_youtube', array(
		'default'   => "https://www.youtube.com/",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'jsocial_link_youtube', 
        array(
		'label'    => __( 'Youtube Link', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'url',

	) );
        
    
    $wp_eduhub->selective_refresh->add_partial('jsocial_link_youtube',array(
		'selector'=>'#j-youtube',
		'settings'=>'jsocial_link_youtube',
		'render_callback'=>function(){
			return get_theme_mod('jsocial_link_youtube');
		}
	));
       
    
    /*featured post*/
    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_icon_one', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_icon_one', array(
		'label'    => __( 'Featured Post Icon One', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Select Featured Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
        ),
        
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_featured_post_icon_one',array(
		'selector'=>'#eduhub-featured-con-one',
		'settings'=>'eduhub_featured_post_icon_one',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_featured_post_icon_one');
		}
	));
    
    
    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_heading_one', array(
		'default'   => "Certified Teachers",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_heading_one', array(
		'label'    => __( 'Heading One', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Featured Post Heading', 'eduhub' ),
		'type'     => 'text'
	) );    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_descriptions_one', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_descriptions_one', array(
		'label'    => __( 'Description One', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Featured Post Description', 'eduhub' ),
		'type'     => 'text'
	) );
 
    

    $wp_eduhub->add_setting( 'eduhub_featured_post_icon_two', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_icon_two', array(
		'label'    => __( 'Featured Post Icon Two', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Select Featured Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
        ),
        
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_featured_post_icon_two',array(
		'selector'=>'#eduhub-featured-con-two',
		'settings'=>'eduhub_featured_post_icon_two',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_featured_post_icon_two');
		}
	));
    
    
    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_heading_two', array(
		'default'   => "Special Education",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_heading_two', array(
		'label'    => __( 'Heading Two', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Featured Post Heading', 'eduhub' ),
		'type'     => 'text'
	) );    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_descriptions_two', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_descriptions_two', array(
		'label'    => __( 'Description Two', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Featured Post Description', 'eduhub' ),
		'type'     => 'text'
	) );
 
    
    


    $wp_eduhub->add_setting( 'eduhub_featured_post_icon_three', array(
		'default'   => "flaticon-books",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_icon_three', array(
		'label'    => __( 'Featured Post Icon Three', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Select Featured Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
        ),
        
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_featured_post_icon_three',array(
		'selector'=>'#eduhub-featured-con-three',
		'settings'=>'eduhub_featured_post_icon_three',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_featured_post_icon_three');
		}
	));
    
    
    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_heading_three', array(
		'default'   => "Special Education",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_heading_three', array(
		'label'    => __( 'Heading Three', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Featured Post Heading', 'eduhub' ),
		'type'     => 'text'
	) );    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_descriptions_three', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_descriptions_three', array(
		'label'    => __( 'Description Three', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Featured Post Description', 'eduhub' ),
		'type'     => 'text'
	) );
 
     


    $wp_eduhub->add_setting( 'eduhub_featured_post_icon_four', array(
		'default'   => "flaticon-diploma",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_icon_four', array(
		'label'    => __( 'Featured Post Icon Four', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Select Featured Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
        ),
        
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_featured_post_icon_four',array(
		'selector'=>'#eduhub-featured-con-four',
		'settings'=>'eduhub_featured_post_icon_four',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_featured_post_icon_four');
		}
	));
    
    
    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_heading_four', array(
		'default'   => "Special Education",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_heading_four', array(
		'label'    => __( 'Heading Four', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Featured Post Heading', 'eduhub' ),
		'type'     => 'text'
	) );    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_descriptions_four', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_descriptions_four', array(
		'label'    => __( 'Description Four', 'eduhub' ),
		'section'  => 'eduhub_front_page',
        'description' => __( 'Featured Post Description', 'eduhub' ),
		'type'     => 'text'
	) );
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

add_action( 'customize_register', 'eduhub_customizer_settings' );





function homepage_sub_heading_display() {
	if ( get_theme_mod( 'eduhub_display_sub_heading' ) == 1 ) {
		return true;
	}

	return false;
}