<?php


function eduhub_about_us_customize_register($wp_eduhub){
	

  /**
	 * About us Page Settings
	 */
    
	$wp_eduhub->add_section( 'eduhub_about_page', array(
		'title'           => __( 'About Page Settings', 'eduhub' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/about-us.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/about-us.php' );
		}
	) );
     
    $wp_eduhub->add_setting( 'eduhub_about_featured_content_heading', array(
		'default'   => "Welcome to visaHub",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_featured_content_heading', array(
		'label'    => __( 'Featured Heading', 'eduhub' ),
		'section'  => 'eduhub_about_page',
		'type'     => 'text',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_about_featured_content_heading',array(
		'selector'=>'#eduhub-about-content-heading',
		'settings'=>'eduhub_about_featured_content_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_about_featured_content_heading');
		}
	));     
    
	
	     
    $wp_eduhub->add_setting( 'eduhub_about_featured_content', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_featured_content', array(
		'label'    => __( 'Featured Description', 'eduhub' ),
		'section'  => 'eduhub_about_page',
		'type'     => 'textarea',

	) );
    
          
    $wp_eduhub->add_setting( 'eduhub_about_featured_image', array(
		'default'   => "Upload Image",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_eduhub,
			'eduhub_about_featured_image',
			array(
				'label'      => __( 'Upload About Featured Image', 'eduhub' ),
				'section'    => 'eduhub_about_page',
				'settings'   => 'eduhub_about_featured_image',
				'width'		=>500,
				'height'	=>500,
			)
		)
	);
    
	
	   
    $wp_eduhub->selective_refresh->add_partial('eduhub_about_featured_image',array(
		'selector'=>'#eduhub-about-featured-image',
		'settings'=>'eduhub_about_featured_image',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_about_featured_image');
		}
	));     
    
	
	
    $wp_eduhub->add_setting( 'eduhub_about_history_heading', array(
		'default'   => "Our History",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_history_heading', array(
		'label'    => __( 'History Heading', 'eduhub' ),
		'section'  => 'eduhub_about_page',
		'type'     => 'text',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_about_history_heading',array(
		'selector'=>'#eduhub-history-heading',
		'settings'=>'eduhub_about_history_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_about_history_heading');
		}
	));     
    
		
	
	  $wp_eduhub->add_setting( 'eduhub_about_history_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_history_description', array(
		'label'    => __( 'History Description', 'eduhub' ),
		'section'  => 'eduhub_about_page',
		'type'     => 'textarea',

	) );
    
	
	
	
	
    $wp_eduhub->add_setting( 'eduhub_about_vision_heading', array(
		'default'   => "Our Vision",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_vision_heading', array(
		'label'    => __( 'History Heading', 'eduhub' ),
		'section'  => 'eduhub_about_page',
		'type'     => 'text',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_about_vision_heading',array(
		'selector'=>'#eduhub-vision-heading',
		'settings'=>'eduhub_about_vision_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_about_vision_heading');
		}
	));     
    
		
	
	  $wp_eduhub->add_setting( 'eduhub_about_vision_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_vision_description', array(
		'label'    => __( 'Vision Description', 'eduhub' ),
		'section'  => 'eduhub_about_page',
		'type'     => 'textarea',

	) );
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}


add_action('customize_register','eduhub_about_us_customize_register');