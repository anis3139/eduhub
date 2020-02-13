<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head();?>
</head>
<body<?php body_class();?>>
    <div class="bg-danger text-light social-topbar">
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
                                <li class="ftco-animate" id="eduhub-facebook"><a href="<?php echo esc_url(get_theme_mod('jsocial_link_facebook',__('https://www.facebook.com/anis3139','eduhub')));?>"><span class="icon-facebook"></span></a></li>
                                 <li class="ftco-animate" id="eduhub-twitter"><a href="<?php echo esc_url(get_theme_mod('jsocial_link_twitter',__('https://www.twitter.com/anis3139','eduhub')));?>"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"  id="eduhub-instagram"><a href="<?php echo esc_url(get_theme_mod('jsocial_link_instagram',__('https://www.instagram.com/anis.arronno','eduhub')));?>"><span class="icon-instagram"></span></a></li>
                                <li class="ftco-animate" id="j-youtube"><a href="<?php echo esc_url(get_theme_mod('jsocial_link_youtube',__('https://www.youtube.com/anis.arronno','eduhub')));?>"><span class="icon-youtube"></span></a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END nav -->
