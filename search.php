<?php get_header(); ?>

<!-- Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-8">
            <?php
                if(have_posts()) {
                    while (have_posts()) : the_post();
                        if($post->post_type == 'page') {
                            echo '<h2 style="text-align:center;">Post tidak ditemukah!!</h2>';
                        } else {
                            get_template_part('templates/content');	
                        }   
                    endwhile;

                    pagination();
    
                    wp_reset_postdata();
                } else {
                    echo '<h2 style="text-align:center;">Post tidak ditemukah!!</h2>';
                } 
            ?>
        </div>
        <div class="col-12 col-lg-4">
        <?php get_template_part('templates/sidebar'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>