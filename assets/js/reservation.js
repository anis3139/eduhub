$(window).scroll(function(){
    if($(this).scrollTop()>70) {
        $('#header img').attr('src','https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/600px-Apple_logo_black.svg.png');
    }
    else {
        $('#header img').attr('src','https://www.seeklogo.net/wp-content/uploads/2012/12/apple-logo-eps-logo-vector-400x400.png');
    }
})