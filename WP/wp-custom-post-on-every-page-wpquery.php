<!-- 

1. create custom post type in ACF and select "show feild if post type is equal to"
2. Now register a new post type in functions.php

add_action('init', 'cptui_register_my_cpt_logos');
function cptui_register_my_cpt_logos() {
register_post_type('logos', array(
'label' => 'logos',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'logos', 'with_front' => true),
'query_var' => true,
'exclude_from_search' => true,
'supports' => array('title'),
'labels' => array (
  'name' => 'Logos',
  'singular_name' => 'Logos',
  'menu_name' => 'Logos',
  'add_new' => 'Add Logo',
  'add_new_item' => 'Add New Logo',
  'edit' => 'Edit',
  'edit_item' => 'Edit Logo',
  'new_item' => 'New Logo',
  'view' => 'View Logo',
  'view_item' => 'View Logo',
  'search_items' => 'Search Logos',
  'not_found' => 'No Logos Found',
  'not_found_in_trash' => 'No Logos Found in Trash',
  'parent' => 'Parent Logo',
)
) ); }

3. then add the custom loop below in FOOTER and it will appear on everypage



-->          



          <?php
            $args = array( 'post_type' => 'logos', 'posts_per_page' => 5, 'orderby' => 'rand' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                                                    
              $supporter_logo = get_field('supporter_logo');
                                                        //var_dump();
              $supporter_url = get_field('supporter_url');
              echo "<a href='".$supporter_url."' target=\"_blank\" ><img src='".$supporter_logo."' class=\"supporter-logo\" /></a>";
            
            endwhile;
            wp_reset_query();
           ?>