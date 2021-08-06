<div>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="rounded " alt="" width="100%" height="400">
</div>
<div class="post-info mt-2">
    <ul>
        <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
        <li><i class="fa fa-tags" aria-hidden="true"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_category(', '); ?></a></li>
    </ul>
</div>
<h4 class="mt-2 text-uppercase"><?php the_title(); ?></h4>
<div id="content">
    <?php the_content(); ?>
</div>