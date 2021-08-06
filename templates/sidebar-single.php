<div class="card mb-4 card-category">
    <div class="card-header">
        CATEGORY
    </div>
    <div class="card-body pb-0">
    <?php
        $categories =  get_categories();
        // print_r($categories);
        echo '<ul>';
        foreach  ($categories as $category) {
            echo '<li><a href="'.get_category_link( $category->term_id ).'"><i class="fa fa-arrow-right text-info mr-1" aria-hidden="true"></i> '. $category->cat_name .'</a></li>';
        }
        echo '</ul>';
    ?>
       
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        TAGS
    </div>
    <div class="card-body pb-2">
    <?php
        $tags =  get_tags();
        foreach  ($tags as $tag) {
            echo '<a class="btn btn-info mr-1 mb-3" href="'.get_tag_link( $tag->term_id ).'">'. $tag->name .'</a>';
        }
    ?>
    </div>

</div>