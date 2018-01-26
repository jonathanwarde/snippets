<?php 
// WP CODE SNIPPETS


// Styles Format:  wp_enqueue_style($handle, $src, $deps, $ver, $media);
wp_register_style('pagination-style', plugins_url('style.css', __FILE__));
wp_enqueue_style('pagination-style');
wp_register_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
wp_enqueue_style('fontawesome');



// Script Format:  wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
wp_enqueue_script('jquery');

// Get out of my page!
wp_dequeue_style('pagination-style');
wp_dequeue_script('jquery');

// Script dependncies and order
 <?php wp_enqueue_script('NameMySccript', 'path/to/MyScript', 
'dependencies_MyScript', 'VersionMyScript', 'InfooterTrueorFalse'); ?>

// Load script on certain page only  
 if(is_front_page()):
        wp_register_script('utb-home', get_template_directory_uri() . '/styles/home.min.css', '', '1.0', 'screen');
        wp_enqueue_script('utb-home');
 endif;



// ACF

<div class="header_image">
          <?php $image = get_field('header_image');
          if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
</div>

<?php the_sub_field('sales_bullet_text');?>

/////////////////////////////////////////////////////////////////////////////////////////

<?php if( have_rows('sales_video') ) : while( have_rows('sales_video') ): the_row(); ?>
      <div class="sales-video">
        <h3><?php the_sub_field('sales_video_title');?></h3>
        <div class="embed-responsive embed-responsive-4by3" rel="lightbox">
        <?php the_sub_field('sales_video_embed');?>
      </div>
    </div>
<? endwhile; endif; ?>

/////////////////////////////////////////////////////////////////////////////////////////

<?php while(has_sub_field('winner_entry')) { ?>
 <div class="winner gallery-item showing">
 <a href="<?php (the_sub_field('winner_picture')); ?>" title="<?php (the_sub_field('winner_picture_title')); ?>" rel="lightbox" class="hvr-glow">
        <img src="<?php (the_sub_field('winner_picture')); ?>" class="album-pic" alt="<?php (the_sub_field('second_place_alt')); ?>" />
            <div class="winner-blurb">
            <h6 class="podium"><span class="podium-1">1</span><span class="podium-2">st</span><span class="podium-3">winner</span></h6>
            <p class="entry-name"><?php (the_sub_field('winner_entry_name')); ?></p>
            <p class="entry-details">
                <span style="font-weight:bold"><?php (the_sub_field('winner_album_title')); ?></span>
                <span><?php (the_sub_field('winner_album_artist')); ?></span>
            </p>
            </div><!--end winner-blub-->
        </a>
</div><!--end winner-entry-->

<?php }?>

////////////////////////////////////////////////////////////////////////////

			 <?php 
                $imageArray = get_sub_field('gallery_picture'); //array ruturned by acf
                $imageAlt = $imageArray['alt']; // grab, from the array, the alt
                $imageThumbURL = $imageArray['sizes']['thumbnail']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
                $imageDesc = $imageArray['description']; // grab image description from array
               ?>

               <img src="<?php echo $imageArray; ?>" />
               <p><?php echo $imageDesc; ?></p>

//////////////////////////////////////////////////////

// Turn off Contact Form 7 styles
add_filter( 'wpcf7_load_css', '__return_false' );



/////////////////////////////////////////////////////

Anchors  - using IDs

 <a href="<?php echo get_permalink( 4015 ); ?>"></a> 


 ////////////////////////////// Remove unwanted  <p> tags from posts - comment out the following
 // add_filter('the_content', 'wpautop');

in default-filters.php 

?>