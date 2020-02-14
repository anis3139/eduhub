<?php
function eduhub_practice_metabox( $metaboxes ) {
    $metaboxes[] = array(
	'id'        => 'eduhub_study_abroad',
        'title'     => __( 'practice Details', 'eduhub' ),
        'post_type' => 'study-abroad',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'eduhub_practice_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'icon',
                        'title'   => __( 'Select Icon', 'eduhub' ),
                        'type'    => 'text',
                        
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'eduhub_practice_metabox' );

