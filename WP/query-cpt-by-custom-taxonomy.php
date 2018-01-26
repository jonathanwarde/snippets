<?php

$the_query = new WP_Query( array(
    'post_type' => 'Adverts',
    'tax_query' => array(
        array (
            'taxonomy' => 'advert_tag',
            'field' => 'slug',
            'terms' => 'politics',
        )
    ),
) );

while ( $the_query->have_posts() ) :
    $the_query->the_post();
    // Show Posts ...
endwhile;

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/
wp_reset_postdata();

?>