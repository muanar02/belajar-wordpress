<div class="card mb-3 shadow-sm card-post">
    <div class="row no-gutters">
        <div class="col-md-5">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image-post">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <h5 class="card-title text-uppercase"><?php the_title(); ?></h5>
                <p class="card-text mb-1">
                    <?= get_the_excerpt(); ?>
                </p>
                <p class="card-text">
                    <small class="text-muted"><?= get_the_date(); ?></small>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Readmore</a>
            </div>
        </div>
    </div>
</div>


