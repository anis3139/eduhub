<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri()?>.'/assets/images/bg_2.jpg';');">
    <div class=""></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread"><?php the_title();?></h1>
                <?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
            </div>
        </div>
    </div>
</section>
