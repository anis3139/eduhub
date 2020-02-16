<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head();?>
</head>
<body<?php body_class();?>>
    <div class="text-light social-topbar">
        <div class="container etopbar social-topbar">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <a href="mailto:<?php echo esc_html(get_theme_mod('eduhub_mail',__('anis904692@gmail.com','eduhub')));?>"><span id="eduhub-mail" class="text"><?php echo esc_html(get_theme_mod('eduhub_mail',__('anis904692@gmail.com','eduhub')));?></span></a>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <a href="tel:<?php echo esc_html(get_theme_mod('eduhub_mobile',__('00801816366535','eduhub')));?>"><span class="text" id="eduhub-mobile"><?php echo esc_html(get_theme_mod('eduhub_mobile',__('00801816366535','eduhub')));?></span></a>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center justify-content-around social-icon pb-1" >
                            <div class="text-white ftco-footer-social list-unstyled float-md-left float-lft mr-2 pt-3">
                               
                                <?php 
									if ( is_active_sidebar( "socialicon" ) ) {
                        		dynamic_sidebar( "socialicon" );
                    				}
                    			?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part("/page-templates/common/menu")?>
    <!-- END nav -->
