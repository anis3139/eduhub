;(function($){
    $(document).ready(function(){

        $("#reservenow").on('click',function(){
            $.post(eduhuburl.ajaxurl,{
                action:'reservation',
                name:$("#name").val(),
                email:$("#email").val(),
                phone:$("#phone").val(),
                country:$("#country").val(),
                rn:$("#rn").val()
            },function(data){
                console.log(data);
                if('Successful'==data){
                    alert('Your Application Submitted');
                }else if('Duplicate'==data){
                    alert('You have already placed a Application. No need to submit again.');
                }

            });
            return false;
        });

    });
})(jQuery);