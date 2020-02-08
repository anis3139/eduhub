<?php
 $eduhub_statistics_image_id =get_theme_mod("eduhub_Statistics_image","large");
?>

<section class="ftco-section ftco-counter img statistics" id="section-counter Statistics-image" style="background-image: url(<?php echo esc_url($eduhub_statistics_image_id);?>);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                <h2 class="mb-4 text-white" id="eduhub-statistics-heading"><?php echo esc_html(get_theme_mod('eduhub_statistics_heading'));?></h2>
                <p class="text-white mb-4 text-center" id="eduhub-statistics-section-desc"><?php echo esc_html(get_theme_mod('eduhub_statistics_description'));?></p>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="row d-md-flex align-items-center statistics">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon" id="statistics-icon-one">
                            <span class="<?php echo esc_attr(get_theme_mod('eduhub_statistics_icon_one',__('flaticon-reading','eduhub')));?>" id="icon"></span>
                            </div>
                            <div class="text">
                                <div id="eduhub-statistics-one">
                                    <strong class="number text-white" data-number="<?php echo esc_attr(get_theme_mod('eduhub_statistics_one',__('50','eduhub')));?>"></strong>
                                </div>
                                <div id="eduhub-statistics-content-heading-one">
                                    <span class="text-white" ><?php echo esc_html(get_theme_mod('eduhub_statistics_content_heading_one',__('Countries','eduhub')));?>
                                    </span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon" id="statistics-icon-two">
                            <span class="<?php echo esc_attr(get_theme_mod('eduhub_statistics_icon_two',__('flaticon-reading','eduhub')));?>" id="icon"></span>
                            </div>
                            <div class="text">
                                <div id="eduhub-statistics-two">
                                    <strong class="number text-white" data-number="<?php echo esc_attr(get_theme_mod('eduhub_statistics_two',__('200','eduhub')));?>"></strong>
                                </div>
                                <div id="eduhub-statistics-content-heading-two">
                                    <span class="text-white" ><?php echo esc_html(get_theme_mod('eduhub_statistics_content_heading_two',__('Student Visa','eduhub')));?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon" id="statistics-icon-three">
                            <span class="<?php echo esc_attr(get_theme_mod('eduhub_statistics_icon_three',__('flaticon-reading','eduhub')));?>" id="icon"></span>
                            </div>
                            <div class="text">
                                <div id="eduhub-statistics-three">
                                    <strong class="number text-white" data-number="<?php echo esc_attr(get_theme_mod('eduhub_statistics_three',__('200','eduhub')));?>"></strong>
                                </div>
                                <div id="eduhub-statistics-content-heading-three">
                                    <span class="text-white" ><?php echo esc_html(get_theme_mod('eduhub_statistics_content_heading_three',__('Happy Smiles','eduhub')));?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon" id="statistics-icon-four">
                            <span class="<?php echo esc_attr(get_theme_mod('eduhub_statistics_icon_four',__('flaticon-reading','eduhub')));?>" id="icon"></span>
                            </div>
                            <div class="text">
                                <div id="eduhub-statistics-four">
                                    <strong class="number text-white" data-number="<?php echo esc_attr(get_theme_mod('eduhub_statistics_four',__('200','eduhub')));?>"></strong>
                                </div>
                                <div id="eduhub-statistics-content-heading-four">
                                    <span class="text-white"><?php echo esc_html(get_theme_mod('eduhub_statistics_content_heading_four',__('Partners','eduhub')));?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
