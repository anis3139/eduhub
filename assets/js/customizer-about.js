;
(function ($) {

/*	----------------------
	About Page
-------------------------------*/
    
    wp.customize('eduhub_about_featured_content',function(value){
        value.bind(function(newvalue){
            $("#eduhub-about-content").html(newvalue);
        });
    }); 
	
	 wp.customize('eduhub_about_history_description',function(value){
        value.bind(function(newvalue){
            $("#eduhub-history-description").html(newvalue);
        });
    }); 
	
	 wp.customize('eduhub_about_vision_description',function(value){
        value.bind(function(newvalue){
            $("#eduhub-vision-description").html(newvalue);
        });
    }); 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

})(jQuery);
