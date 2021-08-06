<?php

add_action('wp_enqueue_scripts', 'load_file');

function load_file() {

    $theme_path = get_template_directory_uri();
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style('bootstrap', $theme_path.'/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('base', $theme_path.'/assets/css/style.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', $theme_path.'/assets/js/bootstrap.bundle.min.js', '', false, true);
}

add_filter('excerpt_length', 'get_excerpt_length');

// the_excerpt
function get_excerpt_length() {
    return 20;
}

add_filter('excerpt_more', 'return_excerpt_text');

function return_excerpt_text() {
    return ' ...';
}

add_action('after_setup_theme', 'init_setup');

function init_setup() {

    register_nav_menu('main-menu',__( 'Main Menu' ));
    // add featured image
    add_theme_support('post-thumbnails');
}

function pagination($pages = '', $range = 2) {  
    $showitems = ($range * 2)+1;  

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }   

    $output = "";
    if(1 != $pages) {
        $output .= "<div class='pt-3'>
                    <nav aria-label='Page navigation example'>
                    <ul class='pagination justify-content-center'>";

        if($paged > 1 && $pages > 1) {
            $output .= "<li class='page-item'>
                            <a class='page-link' href='".get_pagenum_link($paged - 1)."' tabindex='-1' aria-disabled='true'>Previous</a>
                        </li>";
        } else {
            $output .= "<li class='page-item disabled'>
                            <a class='page-link' href='#' tabindex='-1' aria-disabled='true'>Previous</a>
                        </li>";
        }

        for ($i=1; $i <= $pages; $i++) {
           if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
               if($paged == $i) {
                    $output .= "<li class='page-item disabled'><a class='page-link' href='#'>$i</a></li>";
               } else {
                    $output .= "<li class='page-item'><a class='page-link' href='".get_pagenum_link($i)."'>$i</a></li>";
               }
               
               
           }
       }

        if($paged < $pages && $pages > 1) {
            $output .= "<li class='page-item'>
                            <a class='page-link' href='".get_pagenum_link($paged + 1)."' tabindex='+1' aria-disabled='true'>Next</a>
                        </li>";
        } else {
            $output .= "<li class='page-item disabled'>
                            <a class='page-link' href='#'>Next</a>
                        </li>";
        }

        $output .= "</ul>
                    </nav>
                    </div>";

        echo $output;
        
    }
}


    

?>