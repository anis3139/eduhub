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
    
    
    
    
    
    
    
    
    
    
    
    
})(jQuery);