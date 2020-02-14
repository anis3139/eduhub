;(function($){
    $(document).ready(function(){

        $("#reservenow").on('click',function(){
            $.post(eduhuburl.ajaxurl,{
                action:'reservation',
                name:$("#name").val(),
                email:$("#email").val(),
                phone:$("#phone").val(),
                persons:$("#persons").val(),
                rn:$("#rn").val()
            },function(data){
                console.log(data);
                if('Successful'==data){
                    alert('Your reservation request has been placed');
                }else if('Duplicate'==data){
                    alert('You have already placed a request for this reservation. No need to submit again');
                }

            });
            return false;
        });

    });
})(jQuery);