 <div class="pt-5">
     <h3 class="mb-5">
         <?php
                $eduhub_cn = get_comments_number();
                if ( $eduhub_cn <= 1 ) {
                    echo esc_html($eduhub_cn) . " " . __( "Comment", "eduhub" );
                } else {
                    echo esc_html($eduhub_cn) . " " . __( "Comments", "eduhub" );
                }
                ?>
     </h3>
     
     
     <ul class="comment-list">
     <?php
                wp_list_comments(
                    
                );
                ?>
     </ul>
     <div class="comments-pagination">
                <?php
                the_comments_pagination( array(
                    'screen_reader_text' => __( 'Pagination', 'eduhub' ),
                    'prev_text'          => '<' . __( 'Previous Comments', 'eduhub' ),
                    'next_text'          => '>' . __( 'Next Comments', 'eduhub' ),
                ) );
                ?>
            </div>
     <div class="comment-form-wrap pt-5">
        
         <h3 class="h2">
                    <?php _e("Add Comment","eduhub"); ?>
                </h3>

                <?php
                comment_form();
                ?>

         
     </div>
 </div>
