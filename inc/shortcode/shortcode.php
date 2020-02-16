<?php
function eduhub_button( $attributes ) {

    $default = array(
        'type'=>'primary',
        'title'=>__("Button",'eduhub'),
        'url'=>'',
    );

    $button_attributes = shortcode_atts($default,$attributes);


    return sprintf( '<a target="_blank" class="btn btn--%s full-width" href="%s">%s</a>',
        $button_attributes['type'],
        $button_attributes['url'],
        $button_attributes['title']
    );
}

add_shortcode( 'button', 'eduhub_button' );


function eduhub_button2( $attributes, $content='' ) {
    $default = array(
        'type'=>'primary',
        'title'=>__("Button",'eduhub'),
        'url'=>'',
    );

    $button_attributes = shortcode_atts($default,$attributes);


    return sprintf( '<a target="_blank" class="btn btn--%s full-width" href="%s">%s</a>',
        $button_attributes['type'],
        $button_attributes['url'],
        do_shortcode($content)
    );
}

add_shortcode( 'button2', 'eduhub_button2' );

function eduhub_uppercase($attributes, $content=''){
    return strtoupper(do_shortcode($content));
}
add_shortcode('uc','eduhub_uppercase');

function eduhub_google_map($attributes){
    $default = array(
        'place'=>'Dhaka',
        'width'=>'100%',
        'height'=>'500px',
        'zoom'=>'14'
    );

    $params = shortcode_atts($default,$attributes);

    $map = <<<EOD
<div>
    <div>
        <iframe width="{$params['width']}" height="{$params['height']}"
                src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
</div>
EOD;

    return $map;

}
add_shortcode('gmap','eduhub_google_map');