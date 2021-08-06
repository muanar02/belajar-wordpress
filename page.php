<?php get_header(); ?>
<!-- Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
        <?php
            if(have_posts()) {
                while (have_posts()) : the_post();
                    ?>
                    <h2 class="text-center mb-3 text-uppercase"><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                    <?php
                endwhile;
            }
        ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>