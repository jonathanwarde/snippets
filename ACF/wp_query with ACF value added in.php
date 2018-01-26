<?php

$the_query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => '1',
    // pass in ACF TRUE/FALSE value of "Featured post"
    'meta_query' => array(
	    array(
	      'key' => 'featured_post',
	      'value' => '1',
	      'compare' => '==' // not really needed, this is the default
	    )
	 )
) );

while ( $the_query->have_posts() ) :
    $the_query->the_post();?>

<div class="home-page-post large-3 medium-2 columns">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/new-products.jpg" alt="">
			<h2><?php the_title();?></h2>
			<p>Chela Guard on the march</p>
			<a href="#">
				Read more
			</a>
		</div><!--end homepage post-->


<?php endwhile;

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/
wp_reset_postdata();

?>