;(function ($) {

     /*Social Link*/
     
    wp.customize('jsocial_link_facebook',function(value){
        value.bind(function(newvalue){
            $("#eduhub-facebook").html(newvalue);
        });
    });
    wp.customize('jsocial_link_twitter',function(value){
        value.bind(function(newvalue){
            $("#eduhub-twitter").html(newvalue);
        });
    });
    
    wp.customize('jsocial_link_instagram',function(value){
        value.bind(function(newvalue){
            $("#eduhub-instagram").html(newvalue);
        });
    }); 
    
    /*Featured Post*/
    
    wp.customize('eduhub_featured_post_heading_one',function(value){
        value.bind(function(newvalue){
            $("#eduhub-fph1").html(newvalue);
        });
    });
    
    wp.customize('eduhub_featured_post_descriptions_one',function(value){
        value.bind(function(newvalue){
            $("#eduhub-fpd1").html(newvalue);
        });
    }); 
    
    
    wp.customize('eduhub_featured_post_heading_two',function(value){
        value.bind(function(newvalue){
            $("#eduhub-fph2").html(newvalue);
        });
    });
    
    wp.customize('eduhub_featured_post_descriptions_two',function(value){
        value.bind(function(newvalue){
            $("#eduhub-fpd2").html(newvalue);
        });
    });
    
      
    
    wp.customize('eduhub_featured_post_heading_three',function(value){
        value.bind(function(newvalue){
            $("#eduhub-fph3").html(newvalue);
        });
    });
    
    wp.customize('eduhub_featured_post_descriptions_three',function(value){
        value.bind(function(newvalue){
            $("#eduhub-fpd3").html(newvalue);
        });
    });
    
      
    
    wp.customize('eduhub_featured_post_heading_four',function(value){
        value.bind(function(newvalue){
            $("#eduhub-fph4").html(newvalue);
        });
    });
    
    wp.customize('eduhub_featured_post_descriptions_four',function(value){
        value.bind(function(newvalue){
            $("#eduhub-fpd4").html(newvalue);
        });
    });
    
    
    /*about section*/
    
    wp.customize('eduhub_about_sub_heading',function(value){
        value.bind(function(newvalue){
            $("#eduhub-about-sheading").html(newvalue);
        });
    });
        
    wp.customize('eduhub_about_content_heading_one',function(value){
        value.bind(function(newvalue){
            $("#eduhub-about-content-heading-one").html(newvalue);
        });
    });
    
            
    wp.customize('eduhub_about_content_desc_one',function(value){
        value.bind(function(newvalue){
            $("#eduhub-about-content-desc-one").html(newvalue);
        });
    });
    
    wp.customize('eduhub_about_content_heading_two',function(value){
        value.bind(function(newvalue){
            $("#eduhub-about-content-heading-two").html(newvalue);
        });
    });
    
            
    wp.customize('eduhub_about_content_desc_two',function(value){
        value.bind(function(newvalue){
            $("#eduhub-about-content-desc-two").html(newvalue);
        });
    });
    
    wp.customize('eduhub_about_content_heading_three',function(value){
        value.bind(function(newvalue){
            $("#eduhub-about-content-heading-three").html(newvalue);
        });
    });
    
            
    wp.customize('eduhub_about_content_desc_three',function(value){
        value.bind(function(newvalue){
            $("#eduhub-about-content-desc-three").html(newvalue);
        });
    });            

    
 /*   statistics sections*/
    
    
    wp.customize('eduhub_statistics_description',function(value){
        value.bind(function(newvalue){
            $("#eduhub-statistics-section-desc").html(newvalue);
        });
    });
        
    wp.customize('eduhub_statistics_content_heading_one',function(value){
        value.bind(function(newvalue){
            $("#eduhub-statistics-content-heading-one").html(newvalue);
        });
    });
    wp.customize('eduhub_statistics_content_heading_two',function(value){
        value.bind(function(newvalue){
            $("#eduhub-statistics-content-heading-two").html(newvalue);
        });
    });    
    wp.customize('eduhub_statistics_content_heading_three',function(value){
        value.bind(function(newvalue){
            $("#eduhub-statistics-content-heading-three").html(newvalue);
        });
    });    
    wp.customize('eduhub_statistics_content_heading_four',function(value){
        value.bind(function(newvalue){
            $("#eduhub-statistics-content-heading-four").html(newvalue);
        });
    });
    wp.customize('eduhub_statistics_icon_one',function(value){
        value.bind(function(newvalue){
            $("#statistics-icon-one").html(newvalue);
        });
    });   
    wp.customize('eduhub_statistics_icon_two',function(value){
        value.bind(function(newvalue){
            $("#statistics-icon-two").html(newvalue);
        });
    });    
    wp.customize('eduhub_statistics_icon_three',function(value){
        value.bind(function(newvalue){
            $("#statistics-icon-three").html(newvalue);
        });
    });    
    wp.customize('eduhub_statistics_icon_four',function(value){
        value.bind(function(newvalue){
            $("#statistics-icon-four").html(newvalue);
        });
    });
    
/*    
    -------------
    experiance
    ----------------*/
    
    wp.customize('eduhub_expert_content_heading_one',function(value){
        value.bind(function(newvalue){
            $("#eduhub-expert-content-heading-one").html(newvalue);
        });
    });
        
    wp.customize('eduhub_expert_content_desc_one',function(value){
        value.bind(function(newvalue){
            $("#eduhub-expert-content_desc-one").html(newvalue);
        });
    });
    
        
    wp.customize('eduhub_expert_content_heading_two',function(value){
        value.bind(function(newvalue){
            $("#eduhub-expert-content-heading-two").html(newvalue);
        });
    });
        
    wp.customize('eduhub_expert_content_desc_two',function(value){
        value.bind(function(newvalue){
            $("#eduhub-expert-content_desc-two").html(newvalue);
        });
    });
    
    
            
    wp.customize('eduhub_expert_content_heading_three',function(value){
        value.bind(function(newvalue){
            $("#eduhub-expert-content-heading-three").html(newvalue);
        });
    });
        
    wp.customize('eduhub_expert_content_desc_three',function(value){
        value.bind(function(newvalue){
            $("#eduhub-expert-content_desc-three").html(newvalue);
        });
    });
    
 /*   ----------------
        Testimonials
    --------------------*/
    
    wp.customize('eduhub_testimonials_description',function(value){
        value.bind(function(newvalue){
            $("#eduhub-testimonials-description").html(newvalue);
        });
    });  

    
    /*Blog Section*/
    
    wp.customize('eduhub_blog_description',function(value){
        value.bind(function(newvalue){
            $("#eduhub-blogl-description").html(newvalue);
        });
    }); 
    
    /*Apply Now*/
    
    
    wp.customize('eduhub_apply_now_phone',function(value){
        value.bind(function(newvalue){
            $("#eduhub-apply-phone").html(newvalue);
        });
    });
        
    wp.customize('eduhub_apply_now_button',function(value){
        value.bind(function(newvalue){
            $("#eduhub-apply-phone").html(newvalue);
        });
    });        
    wp.customize('eduhub_apply_now_heading',function(value){
        value.bind(function(newvalue){
            $("#eduhub-apply-now-heading").html(newvalue);
        });
    });    
    
   /* pertner Sections*/
    
    wp.customize('eduhub_partners_description',function(value){
        value.bind(function(newvalue){
            $("#eduhub-partners-section-desc").html(newvalue);
        });
    });
    
    /*FAQ section*/
        
    wp.customize('eduhub_faq_description',function(value){
        value.bind(function(newvalue){
            $("#eduhub-faq-section-desc").html(newvalue);
        });
    });
    
    
   /* Color Control*/
	 wp.customize('eduhub_heading_color',function(value){
        value.bind(function(newvalue){
            $(".heading-section h2").css("color",newvalue);
        });
    })	 
	wp.customize('eduhub_title_color',function(value){
        value.bind(function(newvalue){
            $(".owl-carousel.home-slider .slider-item .slider-text h1").css("color",newvalue);
        });
    })	 
	
	wp.customize('eduhub_sub_title_color',function(value){
        value.bind(function(newvalue){
            $(".owl-carousel.home-slider .slider-item .slider-text p").css("color",newvalue);
        });
    })	 
	
/*Button Color*/
		
	wp.customize('eduhub_button_color',function(value){
        value.bind(function(newvalue){
            $(".btn.btn-secondary").css("color",newvalue);
        });
    })	 
	
		
	wp.customize('eduhub_button_bg_color',function(value){
        value.bind(function(newvalue){
            $(".btn.btn-secondary").css("background",newvalue);
        });
    })	 
	
	wp.customize('eduhub_button_bg_color',function(value){
        value.bind(function(newvalue){
            $(".btn.btn-secondary").css("border",newvalue);
        });
    })	 
	
	wp.customize('eduhub_button_bg_color',function(value){
        value.bind(function(newvalue){
            $(".btn.btn-secondary:hover, .btn.btn-secondary:focus, .btn.btn-secondary:active ").css("border",newvalue);
        });
    })	 
	wp.customize('eduhub_button_bg_color',function(value){
        value.bind(function(newvalue){
            $(".btn.btn-secondary:hover, .btn.btn-secondary:focus, .btn.btn-secondary:active ").css("color",newvalue);
        });
    })	 
	
/*About Section Color*/
	
	wp.customize('eduhub_about_section_bg',function(value){
        value.bind(function(newvalue){
            $(".services-2 .icon").css("background",newvalue);
        });
    })	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
    
    
})(jQuery);