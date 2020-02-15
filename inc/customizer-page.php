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
    
	
	
	
	/**
	 * Study Abroad Page Settings
	 */
    
	$wp_eduhub->add_section( 'eduhub_study_abroad', array(
		'title'           => __( 'Study Abroad Settings', 'eduhub' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/study.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/study.php' );
		}
	) );
     
	
	   $wp_eduhub->add_setting( 'eduhub_study_abroad_image', array(
		'default'   => "Upload Image",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_eduhub,
			'eduhub_study_abroad_image',
			array(
				'label'      => __( 'Upload About Featured Image', 'eduhub' ),
				'section'    => 'eduhub_study_abroad',
				'settings'   => 'eduhub_study_abroad_image',
				'width'		=>500,
				'height'	=>500,
			)
		)
	);
    
	
	 $wp_eduhub->selective_refresh->add_partial('eduhub_study_abroad_image',array(
		'selector'=>'#eduhub-study-abroad-image',
		'settings'=>'eduhub_study_abroad_image',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_study_abroad_image');
		}
	)); 
	
	$wp_eduhub->add_setting( 'eduhub_study_abroad_heading', array(
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_study_abroad_heading', array(
		'label'    => __( 'Heading', 'eduhub' ),
		'section'  => 'eduhub_study_abroad',
		'type'     => 'text',

	) );
	
    $wp_eduhub->selective_refresh->add_partial('eduhub_study_abroad_heading',array(
		'selector'=>'#eduhub-study-abroad-heading',
		'settings'=>'eduhub_study_abroad_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_study_abroad_heading');
		}
	));
	
		
	$wp_eduhub->add_setting( 'eduhub_study_abroad_description', array(
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_study_abroad_description', array(
		'label'    => __( 'Description', 'eduhub' ),
		'section'  => 'eduhub_study_abroad',
		'type'     => 'textarea',

	) );
	
	    
    /**
	 * Contact Pages Settings
	 */

	$wp_eduhub->add_section( 'eduhub_contact_page', array(
		'title'           => __( 'Contact Page setting', 'eduhub' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/contact-us.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/contact-us.php' );
		}
	) );
    
       $wp_eduhub->add_setting( 'eduhub_address', array(
		'default'   => "Khilgoan, Dhaka-1219, Bangladesh",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_address', array(
		'label'    => __( 'Address', 'eduhub' ),
		'section'  => 'eduhub_contact_page',
		'type'     => 'text',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_address',array(
		'selector'=>'#eduhub-address',
		'settings'=>'eduhub_address',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_address');
		}
	));
     
    $wp_eduhub->add_setting( 'eduhub_phone', array(
		'default'   => "008801816366535",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_phone', array(
		'label'    => __( 'Phone', 'eduhub' ),
		'section'  => 'eduhub_contact_page',
		'type'     => 'text',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_phone',array(
		'selector'=>'#eduhub-phone',
		'settings'=>'eduhub_phone',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_phone');
		}
	));     
    
    
    $wp_eduhub->add_setting( 'eduhub_email', array(
		'default'   => "anis904692@gmail.com",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_email', array(
		'label'    => __( 'Email', 'eduhub' ),
		'section'  => 'eduhub_contact_page',
		'type'     => 'text',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_email',array(
		'selector'=>'#eduhub-email',
		'settings'=>'eduhub_email',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_email');
		}
	));
     
    
    $wp_eduhub->add_setting( 'eduhub_contact_form', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_contact_form', array(
		'label'    => __( 'Contact Form', 'eduhub' ),
		'section'  => 'eduhub_contact_page',
		'type'     => 'textarea',

	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_contact_form',array(
		'selector'=>'#eduhub-contact-form',
		'settings'=>'eduhub_contact_form',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_contact_form');
		}
	));
    
    
    
     /**
	 * Apply Now Pages Settings
	 */

	$wp_eduhub->add_section( 'eduhub_apply_now_page', array(
		'title'           => __( 'Apply Now settings', 'eduhub' ),
		'priority'        => '30',
		'active_callback' => function () {
			if(is_page_template('page-templates/apply-form.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/apply-form.php' );
		}
	) );
    
       $wp_eduhub->add_setting( 'eduhub_apply_heading', array(
		'default'   => "Interested in studying abroad with Gratuate Track?",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_apply_heading', array(
		'label'    => __( 'Apply Heading', 'eduhub' ),
		'section'  => 'eduhub_apply_now_page',
		'type'     => 'text',

	) );
    
       
	 $wp_eduhub->selective_refresh->add_partial('eduhub_apply_heading',array(
		'selector'=>'#eduhub-apply-heading',
		'settings'=>'eduhub_apply_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_apply_heading');
		}
	));
	
	    $wp_eduhub->add_setting( 'eduhub_apply_sub_heading', array(
		'default'   => "Enter your details and we will call you back when it suits you.",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_apply_sub_heading', array(
		'label'    => __( 'Apply Sub Heading', 'eduhub' ),
		'section'  => 'eduhub_apply_now_page',
		'type'     => 'text',

	) );
    
       
	 $wp_eduhub->selective_refresh->add_partial('eduhub_apply_sub_heading',array(
		'selector'=>'#eduhub-apply-sub-heading',
		'settings'=>'eduhub_apply_sub_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_apply_sub_heading');
		}
	));
	
	
	 $wp_eduhub->add_setting( 'eduhub_apply_image', array(
		'default'   => "Upload Image",
		'transport' => 'refresh',
	) );

	$wp_eduhub->add_control(
		new WP_Customize_Image_Control(
			$wp_eduhub,
			'$wp_eduhub',
			array(
				'label'      => __( 'Upload Apply Now Image', 'eduhub' ),
				'section'    => 'eduhub_apply_now_page',
				'settings'   => 'eduhub_apply_image',
			)
		)
	);
	
	 $wp_eduhub->selective_refresh->add_partial('eduhub_apply_image',array(
		'selector'=>'#eduhub-apply-image',
		'settings'=>'eduhub_apply_image',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_apply_image');
		}
	));
	
}


add_action('customize_register','eduhub_about_us_customize_register');
