<?php get_header(); ?>

<!-- Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-8">
        <?php
            if(have_posts()) {
                while (have_posts()) : the_post();
                    get_template_part('templates/content-single');	
                endwhile;
            } else {
                echo '<h2 style="text-align:center;">Tidak ada Post</h2>';
            } 
        ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php get_template_part('templates/sidebar-single'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>