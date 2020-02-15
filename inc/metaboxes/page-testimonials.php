<?php
function eduhub_testimonials_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'eduhub_testimonials',
        'title'     => __( 'Testimonials Details', 'eduhub' ),
        'post_type' => 'eduhub_testimonials',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'eduhub_testimonials_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 't_designation',
                        'title'   => __( 'Designation', 'eduhub' ),
                        'type'    => 'text',
             ), 
          ),
      ),
  ),
);
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'eduhub_testimonials_metabox' );
