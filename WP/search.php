<?php
    // Template for WordPress search.
    // First, make the query based on the search.
    // Then, if there is results, do the loop.
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array(); // If you want more options... ('post_type' => 'post') [...]
    
    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    }
    $search = new WP_Query($search_query); // Make the query.
    // Get the number of results.
    global $wp_query;
    $total_results = $wp_query->found_posts; // echo $total_results;
    // The loop, if there is results.
    if (have_posts()) : while (have_posts()) : the_post();
        // Results! echo whatever you want !
        echo '<a href="'.the_permalink().'">'.get_the_title().'</a>';
    endwhile; else:
        // No results!
        echo '<p>Sorry, no posts matched your criteria.</p>';
    endif;
?>