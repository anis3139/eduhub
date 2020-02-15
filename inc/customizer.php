<?php

function eduhub_customizer_settings( $wp_eduhub ) {
 
	
	$wp_eduhub->add_panel( 'font_page', array(
  		'title'           => __( 'Front Page Settings', 'eduhub' ),
		'priority' => 40, 
	) );
	
	
	
	
   /**
	 * Topbar Settings
	 */
    
	
	
	$wp_eduhub->add_section( 'eduhub_topbar', array(
		'title'           => __( 'Topbar Settings', 'eduhub' ),
		'panel' => 'font_page',
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
		'section'  => 'eduhub_topbar',
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
		'section'  => 'eduhub_topbar',
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
		'section'  => 'eduhub_topbar',
		'type'     => 'url',

	) );
        

   
	$wp_eduhub->add_setting( 'jsocial_link_twitter', array(
		'default'   => "https://www.twitter.com/anis3139",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'jsocial_link_twitter', 
        array(
		'label'    => __( 'Twitter Link', 'eduhub' ),
		'section'  => 'eduhub_topbar',
		'type'     => 'url',

	) );

    
	$wp_eduhub->add_setting( 'jsocial_link_instagram', array(
		'default'   => "https://www.instagram.com/anis.arronno",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'jsocial_link_instagram', 
        array(
		'label'    => __( 'Instagram Link', 'eduhub' ),
		'section'  => 'eduhub_topbar',
		'type'     => 'url',

	) );
        
    

    
    
	$wp_eduhub->add_setting( 'jsocial_link_youtube', array(
		'default'   => "https://www.youtube.com/",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'jsocial_link_youtube', 
        array(
		'label'    => __( 'Youtube Link', 'eduhub' ),
		'section'  => 'eduhub_topbar',
		'type'     => 'url',

	) );
        
    
    $wp_eduhub->selective_refresh->add_partial('jsocial_link_youtube',array(
		'selector'=>'#j-youtube',
		'settings'=>'jsocial_link_youtube',
		'render_callback'=>function(){
			return get_theme_mod('jsocial_link_youtube');
		}
	));
      
	
	
    
	
	
	
   
    /**
	 * Featured Post Settings
	 */
    
	$wp_eduhub->add_section( 'eduhub_featured_post', array(
		'title'           => __( 'Featured Posts Settings', 'eduhub' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
   
    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_icon_one', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_icon_one', array(
		'label'    => __( 'Featured Post Icon One', 'eduhub' ),
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Select Featured Post Icon', 'eduhub' ),
		'type'     => 'select',
        'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
             'flaticon-security' => __( 'Security' ),
             'flaticon-education' => __( 'Education' ),
             'flaticon-jigsaw' => __( 'Jigsaw' ),
             'flaticon-kids' => __( 'kids' ),
        ),
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_featured_post_icon_one',array(
		'selector'=>'#eduhub-featured-icon-one',
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
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Featured Post Heading', 'eduhub' ),
		'type'     => 'text'
	) );    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_descriptions_one', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_descriptions_one', array(
		'label'    => __( 'Description One', 'eduhub' ),
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Featured Post Description', 'eduhub' ),
		'type'     => 'text'
	) );
 
    

    $wp_eduhub->add_setting( 'eduhub_featured_post_icon_two', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_icon_two', array(
		'label'    => __( 'Featured Post Icon Two', 'eduhub' ),
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Select Featured Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
             'flaticon-security' => __( 'Security' ),
             'flaticon-education' => __( 'Education' ),
             'flaticon-jigsaw' => __( 'Jigsaw' ),
             'flaticon-kids' => __( 'kids' ),
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
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Featured Post Heading', 'eduhub' ),
		'type'     => 'text'
	) );    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_descriptions_two', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_descriptions_two', array(
		'label'    => __( 'Description Two', 'eduhub' ),
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Featured Post Description', 'eduhub' ),
		'type'     => 'text'
	) );
 
    
    


    $wp_eduhub->add_setting( 'eduhub_featured_post_icon_three', array(
		'default'   => "flaticon-books",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_icon_three', array(
		'label'    => __( 'Featured Post Icon Three', 'eduhub' ),
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Select Featured Post Icon', 'eduhub' ),
		'type'     => 'select',
       'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
             'flaticon-security' => __( 'Security' ),
             'flaticon-education' => __( 'Education' ),
             'flaticon-jigsaw' => __( 'Jigsaw' ),
             'flaticon-kids' => __( 'kids' ),
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
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Featured Post Heading', 'eduhub' ),
		'type'     => 'text'
	) );    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_descriptions_three', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_descriptions_three', array(
		'label'    => __( 'Description Three', 'eduhub' ),
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Featured Post Description', 'eduhub' ),
		'type'     => 'text'
	) );
 
     


    $wp_eduhub->add_setting( 'eduhub_featured_post_icon_four', array(
		'default'   => "flaticon-diploma",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_icon_four', array(
		'label'    => __( 'Featured Post Icon Four', 'eduhub' ),
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Select Featured Post Icon', 'eduhub' ),
		'type'     => 'select',
        'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
             'flaticon-security' => __( 'Security' ),
             'flaticon-education' => __( 'Education' ),
             'flaticon-jigsaw' => __( 'Jigsaw' ),
             'flaticon-kids' => __( 'kids' ),
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
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Featured Post Heading', 'eduhub' ),
		'type'     => 'text'
	) );    
    
    $wp_eduhub->add_setting( 'eduhub_featured_post_descriptions_four', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_featured_post_descriptions_four', array(
		'label'    => __( 'Description Four', 'eduhub' ),
		'section'  => 'eduhub_featured_post',
        'description' => __( 'Featured Post Description', 'eduhub' ),
		'type'     => 'text'
	) );
 
    
	
	
	
	
	
	
	
	
	
	
	
	  
   /* -----------------
   About Section
   ------------------------*/
    
      
	$wp_eduhub->add_section( 'eduhub_about_section', array(
		'title'           => __( 'About Section Settings', 'eduhub' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
	
	
	
    $wp_eduhub->add_setting( 'eduhub_about_heading', array(
		'default'   => "Why We Are The Best",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_heading', array(
		'label'    => __( 'About Section Heading', 'eduhub' ),
		'section'  => 'eduhub_about_section',
		'type'     => 'text'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_about_heading',array(
		'selector'=>'#eduhub-about-heading',
		'settings'=>'eduhub_about_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_about_heading');
		}
	));
    
    
       
    $wp_eduhub->add_setting( 'eduhub_about_sub_heading', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_sub_heading', array(
		'label'    => __( 'About Section Sub Heading', 'eduhub' ),
		'section'  => 'eduhub_about_section',
		'type'     => 'textarea'
	) );
      
    
    
    
    $wp_eduhub->add_setting( 'eduhub_about_content_heading_one', array(
		'default'   => "Learning system",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_content_heading_one', array(
		'label'    => __( 'About Section Content Heading One', 'eduhub' ),
		'section'  => 'eduhub_about_section',
		'type'     => 'text'
	) );
    
    $wp_eduhub->add_setting( 'eduhub_about_content_desc_one', array(
		'default'   => "Far far away, behind the word mountains, far from the countries Vokalia.",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_content_desc_one', array(
		'label'    => __( 'About Section Content Descriptions One', 'eduhub' ),
		'section'  => 'eduhub_about_section',
		'type'     => 'textarea'
	) );
    
    
        
    $wp_eduhub->add_setting( 'eduhub_about_content_heading_two', array(
		'default'   => "Learning system",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_content_heading_two', array(
		'label'    => __( 'About Section Content Heading Two', 'eduhub' ),
		'section'  => 'eduhub_about_section',
		'type'     => 'text'
	) );
    
    $wp_eduhub->add_setting( 'eduhub_about_content_desc_two', array(
		'default'   => "Far far away, behind the word mountains, far from the countries Vokalia.",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_content_desc_two', array(
		'label'    => __( 'About Section Content Descriptions Two', 'eduhub' ),
		'section'  => 'eduhub_about_section',
		'type'     => 'textarea'
	) );
    
           
    $wp_eduhub->add_setting( 'eduhub_about_content_heading_three', array(
		'default'   => "Learning system",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_content_heading_three', array(
		'label'    => __( 'About Section Content Heading Three', 'eduhub' ),
		'section'  => 'eduhub_about_section',
		'type'     => 'text'
	) );
    
    $wp_eduhub->add_setting( 'eduhub_about_content_desc_three', array(
		'default'   => "Far far away, behind the word mountains, far from the countries Vokalia.",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_about_content_desc_three', array(
		'label'    => __( 'About Section Content Descriptions Three', 'eduhub' ),
		'section'  => 'eduhub_about_section',
		'type'     => 'textarea'
	) );
    
   
	

	
	

  /**
	 * Special Featured Settings
	 */
    
	$wp_eduhub->add_section( 'eduhub_special_featured', array(
		'title'           => __( 'Special Featured Settings', 'eduhub' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
   

     
    $wp_eduhub->add_setting( 'eduhub_expert_heading', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_expert_heading', array(
		'label'    => __( 'Special Featured Heading', 'eduhub' ),
		'section'  => 'eduhub_special_featured',
		'type'     => 'text'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_expert_heading',array(
		'selector'=>'#eduhub-experiance-heading',
		'settings'=>'eduhub_expert_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_expert_heading');
		}
	));
    
    
      $wp_eduhub->add_setting( 'eduhub_expert_content_heading_one', array(
		'default'   => "What We Are",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_expert_content_heading_one', array(
		'label'    => __( 'Heading', 'eduhub' ),
		'description'    => __( 'Special Featured Section Content Heading One', 'eduhub' ),
		'section'  => 'eduhub_special_featured',
		'type'     => 'text'
	) );   
    
    $wp_eduhub->add_setting( 'eduhub_expert_content_desc_one', array(
		'default'   => "All sections required for online training are included to Edulogy.All sections required for online training are included to Edulogy",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_expert_content_desc_one', array(
		'label'    => __( 'Description', 'eduhub' ),
		'description'    => __( 'Special Featured Section Content Description One', 'eduhub' ),
		'section'  => 'eduhub_special_featured',
		'type'     => 'textarea'
	) );
    
    
    $wp_eduhub->add_setting( 'eduhub_expert_content_heading_two', array(
		'default'   => "What We Are",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_expert_content_heading_two', array(
		'label'    => __( 'Heading', 'eduhub' ),
		'description'    => __( 'Special Featured Section Content Heading Two', 'eduhub' ),
		'section'  => 'eduhub_special_featured',
		'type'     => 'text'
	) );   
    
    $wp_eduhub->add_setting( 'eduhub_expert_content_desc_two', array(
		'default'   => "All sections required for online training are included to Edulogy.All sections required for online training are included to Edulogy",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_expert_content_desc_two', array(
		'label'    => __( 'Description', 'eduhub' ),
		'description'    => __( 'Special Featured Section Content Description Two', 'eduhub' ),
		'section'  => 'eduhub_special_featured',
		'type'     => 'textarea'
	) );
    
    
        $wp_eduhub->add_setting( 'eduhub_expert_content_heading_three', array(
		'default'   => "What We Are",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_expert_content_heading_three', array(
		'label'    => __( 'Heading', 'eduhub' ),
		'description'    => __( 'Special Featured Section Content Heading Three', 'eduhub' ),
		'section'  => 'eduhub_special_featured',
		'type'     => 'text'
	) );   
    
    $wp_eduhub->add_setting( 'eduhub_expert_content_desc_three', array(
		'default'   => "All sections required for online training are included to Edulogy.All sections required for online training are included to Edulogy",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_expert_content_desc_three', array(
		'label'    => __( 'Description', 'eduhub' ),
		'description'    => __( 'Special Featured Section Content Description Three', 'eduhub' ),
		'section'  => 'eduhub_special_featured',
		'type'     => 'textarea'
	) );
    
    
	
	
	
	
	
	
	  /**
	 * Front Page Settings
	 */
    
	$wp_eduhub->add_section( 'eduhub_front_page', array(
		'title'           => __( 'Others Section Settings', 'eduhub' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
   
  
 /*   
   --------------
    Testimonials
    ----------------*/
         
    $wp_eduhub->add_setting( 'eduhub_testimonials_heading', array(
		'default'   => "What Parents Says About Us",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_testimonials_heading', array(
		'label'    => __( 'Testimonial Section Heading', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_testimonials_heading',array(
		'selector'=>'#eduhub-testimonials-heading',
		'settings'=>'eduhub_testimonials_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_testimonials_heading');
		}
	));
    
    
    
        
    $wp_eduhub->add_setting( 'eduhub_testimonials_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_testimonials_description', array(
		'label'    => __( 'Description', 'eduhub' ),
		'description'    => __( 'Testimonial Section Description', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'textarea'
	) );
    
    
    
   /* ---------------
        blog section
        -------------*/
    
          
    $wp_eduhub->add_setting( 'eduhub_blog_heading', array(
		'default'   => "Recent Blog",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_blog_heading', array(
		'label'    => __( 'Blog Section Heading', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_blog_heading',array(
		'selector'=>'#eduhub-blog-heading',
		'settings'=>'eduhub_blog_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_blog_heading');
		}
	));
    
    
    
        
    $wp_eduhub->add_setting( 'eduhub_blog_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_blog_description', array(
		'label'    => __( 'Blog Section Description', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text'
	) );
        
   /* ---------------
       Apply Now Section
        -------------*/
    
          
    $wp_eduhub->add_setting( 'eduhub_apply_now_heading', array(
		'default'   => "Lets meet and talk! Call us at",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_apply_now_heading', array(
		'label'    => __( 'Apply Now Heading', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text'
	) );
    

        
    $wp_eduhub->add_setting( 'eduhub_apply_now_phone', array(
		'default'   => "+8801816366535",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_apply_now_phone', array(
		'label'    => __( 'Apply Now Phone', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text'
	) );
    
       
    $wp_eduhub->add_setting( 'eduhub_apply_now_image', array(
		'default'   => "Upload Image",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control(
		new WP_Customize_Image_Control(
			$wp_eduhub,
			'eduhub_apply_now_image',
			array(
				'label'      => __( 'Upload Apply Now Image', 'eduhub' ),
				'section'    => 'eduhub_front_page',
				'settings'   => 'eduhub_apply_now_image',
			)
		)
	);
     
      
        
    $wp_eduhub->add_setting( 'eduhub_apply_now_url', array(
		'default'   => "http://www.rainyforest.xyz",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_apply_now_url', array(
		'label'    => __( 'Apply Now Button Url', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'url'
	) );
    
            
    $wp_eduhub->add_setting( 'eduhub_apply_now_button', array(
		'default'   => "Apply Now",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_apply_now_button', array(
		'label'    => __( 'Apply Now Button', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text'
	) );
    
      $wp_eduhub->selective_refresh->add_partial('eduhub_apply_now_button',array(
		'selector'=>'#eduhub-apply-now-button',
		'settings'=>'eduhub_apply_now_button',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_apply_now_button');
		}
	));
    
    /*----------------
        Partner Section
        ----------------*/
    
   $wp_eduhub->add_setting( 'eduhub_partners_heading', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_partners_heading', array(
		'label'    => __( 'Partners Section Heading', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_partners_heading',array(
		'selector'=>'#eduhub-partners-heading',
		'settings'=>'eduhub_partners_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_partners_heading');
		}
	));
    
    
            
    
    $wp_eduhub->add_setting( 'eduhub_partners_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_partners_description', array(
		'label'    => __( 'Partners Section Description', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'textarea',
	) );  
    
   /* -----------------
    FAQ section
    -----------------*/
    
    
    
   $wp_eduhub->add_setting( 'eduhub_faq_heading', array(
		'default'   => "Frequently Asked Questions",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_faq_heading', array(
		'label'    => __( 'FAQ Section Heading', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'text'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_faq_heading',array(
		'selector'=>'#eduhub-faq-heading',
		'settings'=>'eduhub_faq_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_faq_heading');
		}
	));
    
    
            
    
    $wp_eduhub->add_setting( 'eduhub_faq_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_faq_description', array(
		'label'    => __( 'FAQ Section Description', 'eduhub' ),
		'section'  => 'eduhub_front_page',
		'type'     => 'textarea',
	) );
    
	    
    
    
    
    
    
    
       /*-------------- 
       Statistics
       -----------------*/
	
    $wp_eduhub->add_section( 'eduhub_statistics_section', array(
		'title'           => __( 'Statistics Settings', 'eduhub' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
    $wp_eduhub->add_setting( 'eduhub_statistics_heading', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_heading', array(
		'label'    => __( 'Statistics Section Heading', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'text'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_statistics_heading',array(
		'selector'=>'#eduhub-statistics-heading',
		'settings'=>'eduhub_statistics_heading',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_statistics_heading');
		}
	));
    
    
            
    
    $wp_eduhub->add_setting( 'eduhub_statistics_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_description', array(
		'label'    => __( 'Statistics Section Description', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'textarea',
	) );
    
         
           
        
    $wp_eduhub->add_setting( 'eduhub_statistics_icon_one', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );
    
    $wp_eduhub->add_control( 'eduhub_statistics_icon_one', array(
		'label'    => __( 'Statistics Icon One', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
        'description' => __( 'Select Statistics Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
             'flaticon-security' => __( 'Security' ),
             'flaticon-education' => __( 'Education' ),
             'flaticon-jigsaw' => __( 'Jigsaw' ),
             'flaticon-kids' => __( 'kids' ),
        ),
        
	) );
    
        
    $wp_eduhub->add_setting( 'eduhub_statistics_one', array(
		'default'   => "50",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_one', array(
		'label'    => __( 'Statistics Countries Section', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'number'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_statistics_one',array(
		'selector'=>'#eduhub-statistics-one',
		'settings'=>'eduhub_statistics_one',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_statistics_one');
		}
	));
           
    $wp_eduhub->add_setting( 'eduhub_statistics_content_heading_one', array(
		'default'   => "Countries",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_content_heading_one', array(
		'label'    => __( 'Statistics Countries Section', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'text'
	) );
    
     $wp_eduhub->add_setting( 'eduhub_statistics_icon_two', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );
    
    $wp_eduhub->add_control( 'eduhub_statistics_icon_two', array(
		'label'    => __( 'Statistics Icon Two', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
        'description' => __( 'Select Statistics Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
             'flaticon-security' => __( 'Security' ),
             'flaticon-education' => __( 'Education' ),
             'flaticon-jigsaw' => __( 'Jigsaw' ),
             'flaticon-kids' => __( 'kids' ),
        ),
        
	) );
        
    $wp_eduhub->add_setting( 'eduhub_statistics_two', array(
		'default'   => "200",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_two', array(
		'label'    => __( 'Statistics Student Section', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'number'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_statistics_two',array(
		'selector'=>'#eduhub-statistics-two',
		'settings'=>'eduhub_statistics_two',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_statistics_two');
		}
	));
           
    $wp_eduhub->add_setting( 'eduhub_statistics_content_heading_two', array(
		'default'   => "Student Visa",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_content_heading_two', array(
		'label'    => __( 'Statistics Student Section', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'text'
	) );
    
    
        
            
       
    $wp_eduhub->add_setting( 'eduhub_statistics_icon_three', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );
    
    $wp_eduhub->add_control( 'eduhub_statistics_icon_three', array(
		'label'    => __( 'Statistics Icon Three', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
        'description' => __( 'Select Statistics Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
             'flaticon-security' => __( 'Security' ),
             'flaticon-education' => __( 'Education' ),
             'flaticon-jigsaw' => __( 'Jigsaw' ),
             'flaticon-kids' => __( 'kids' ),
        ),
        
	) );
       
  
        
    $wp_eduhub->add_setting( 'eduhub_statistics_three', array(
		'default'   => "200",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_three', array(
		'label'    => __( 'Statistics Happy Section', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'number'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_statistics_three',array(
		'selector'=>'#eduhub-statistics-three',
		'settings'=>'eduhub_statistics_three',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_statistics_three');
		}
	));
           
    $wp_eduhub->add_setting( 'eduhub_statistics_content_heading_three', array(
		'default'   => "Happy Smiles",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_content_heading_three', array(
		'label'    => __( 'Statistics Happy Section', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'text'
	) );
    
    
        
        
                 
       
    $wp_eduhub->add_setting( 'eduhub_statistics_icon_four', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );
    
    $wp_eduhub->add_control( 'eduhub_statistics_icon_four', array(
		'label'    => __( 'Statistics Icon four', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
        'description' => __( 'Select Statistics Post Icon', 'eduhub' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher' ),
             'flaticon-reading' => __( 'Reading' ),
             'flaticon-books' => __( 'Books' ),
             'flaticon-diploma' => __( 'Diploma' ),
             'flaticon-security' => __( 'Security' ),
             'flaticon-education' => __( 'Education' ),
             'flaticon-jigsaw' => __( 'Jigsaw' ),
             'flaticon-kids' => __( 'kids' ),
        ),
        
	) );
        
    $wp_eduhub->add_setting( 'eduhub_statistics_four', array(
		'default'   => "200",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_four', array(
		'label'    => __( 'Statistics parners Section', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'number'
	) );
    
        
    $wp_eduhub->selective_refresh->add_partial('eduhub_statistics_four',array(
		'selector'=>'#eduhub-statistics-four',
		'settings'=>'eduhub_statistics_four',
		'render_callback'=>function(){
			return get_theme_mod('eduhub_statistics_four');
		}
	));
           
    $wp_eduhub->add_setting( 'eduhub_statistics_content_heading_four', array(
		'default'   => "Partners",
		'transport' => 'postMessage',
	) );

	$wp_eduhub->add_control( 'eduhub_statistics_content_heading_four', array(
		'label'    => __( 'Statistics parners Section', 'eduhub' ),
		'section'  => 'eduhub_statistics_section',
		'type'     => 'text'
	) );
    
    
   
    $wp_eduhub->add_setting( 'eduhub_Statistics_image', array(
		'default'   => "Upload Image",
		'transport' => 'refresh',
	) );

	$wp_eduhub->add_control(
		new WP_Customize_Image_Control(
			$wp_eduhub,
			'$wp_eduhub',
			array(
				'label'      => __( 'Upload Statistics Image', 'eduhub' ),
				'section'    => 'eduhub_statistics_section',
				'settings'   => 'eduhub_Statistics_image',
			)
		)
	);
    
	
	
	
	
	/*----------------
	Color Control
	-----------------*/
	
	 $wp_eduhub->add_section( 'eduhub_heading_color_section', array(
		'title'           => __( 'Front Page Color Control', 'eduhub' ),
		 'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
	
    
    $wp_eduhub->add_setting( 'eduhub_heading_color', array(
		'default'   => '#fda638',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_heading_color_control', array(
		'label'    => __( 'Header Color Control', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_heading_color'
	) ) );
    
    	
   
    $wp_eduhub->add_setting( 'eduhub_title_color', array(
		'default'   => '#fda638',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_title_color_control', array(
		'label'    => __( 'Title Color', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_title_color'
	) ) );
    
    $wp_eduhub->add_setting( 'eduhub_sub_title_color', array(
		'default'   => '#000',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_sub_title_color_control', array(
		'label'    => __( 'Sub Title Color', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_sub_title_color'
	) ) );  
	
	
	
    $wp_eduhub->add_setting( 'eduhub_button_color', array(
		'default'   => '#000',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_button_color_control', array(
		'label'    => __( 'Button Color', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_button_color'
	) ) );
    
    	
	
    $wp_eduhub->add_setting( 'eduhub_button_bg_color', array(
		'default'   => '#fda638',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_button_bg_color_control', array(
		'label'    => __( 'Button Background Color', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_button_bg_color'
	) ) );
    
        	
	
    $wp_eduhub->add_setting( 'eduhub_about_section_bg', array(
		'default'   => '#1EAAF1',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_about_section_color_control', array(
		'label'    => __( 'About Section Icon', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_about_section_bg'
	) ) );       	
	
/*	
	-------------------
		FAQ Section
	-------------------*/
	
	
    $wp_eduhub->add_setting( 'eduhub_faq_section_bg', array(
		'default'   => '#fff',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_faq_section_bg_control', array(
		'label'    => __( 'FAQ Section Background', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_faq_section_bg'
	) ) );
    
    	
   $wp_eduhub->add_setting( 'eduhub_faq_section_color', array(
		'default'   => '#000',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_faq_section_color_control', array(
		'label'    => __( 'FAQ Section Font Color', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_faq_section_color'
	) ) );
    
    	

    
/*    
    --------------
		Topbar Color
	--------------*/
    
    
        	
   $wp_eduhub->add_setting( 'eduhub_topbar_background_color', array(
		'default'   => '#000',
		'transport' => 'postMessage'
	) );

	$wp_eduhub->add_control( new WP_Customize_Color_Control( $wp_eduhub, 'eduhub_topbar_background_color_control', array(
		'label'    => __( 'Topbar Background Color', 'eduhub' ),
		'section'  => 'eduhub_heading_color_section',
		'settings' => 'eduhub_topbar_background_color'
	) ) );
    
    
    
    
    
    
    
    
    
    
    

  
    
    
    
    
    
    
}

add_action( 'customize_register', 'eduhub_customizer_settings' );

