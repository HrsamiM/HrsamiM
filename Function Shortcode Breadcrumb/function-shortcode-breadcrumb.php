<?php
//Function Shortcode Breadcrumb
function breadcrumbs() {
    $homePageTitle = get_the_title( get_option('page_on_front') );

    if(!is_home()) {
        echo '<nav class="breadcrumb">';
        echo '<a class="breadLink" href="'.esc_url(home_url('/')).'">'.$homePageTitle.'</a><span class="divider"> / </span>';
        if (is_category() || is_single()) {
           the_category(' <span class="divider"> / </span> ');
            if (is_single()) {
                echo '<span class="divider"> / </span> ';
                the_title();
            }
        } elseif (is_page()) {
            the_title();
        }
        echo '</nav>';
    }
}
add_shortcode( 'breadcrumbs', 'breadcrumbs' );
//End Function Shortcode Breadcrumbs

?>