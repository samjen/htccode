<?php
/*
 * Template Name: Product Listing Template
*/

get_header(); ?>

<div class="spacer"></div>
<div class="devider_box"> </div>
<div class="model_box">
  <h1>
    <?php the_title();?>
  </h1>
  <div>
    <ul class="models">
      <?
$child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID." AND post_type = 'page' ORDER BY menu_order", 'OBJECT');

if ( $child_pages ) :
    foreach ( $child_pages as $pageChild ) :
        setup_postdata( $pageChild );
        $thumbnail = get_the_post_thumbnail($pageChild->ID, 'thumbnail');
        if($thumbnail == "") continue; // Skip pages without a thumbnail
?>
      <li> <a href="<?= get_permalink($pageChild->ID) ?>" rel="bookmark" title="<?= $pageChild->post_title ?>">
        <div class="mdl_img">
          <?= $thumbnail ?>
        </div>
        <h3>
          <?= $pageChild->post_title ?>
        </h3>
        </a> </li>
      <?
    endforeach;
endif;
?>
    </ul>
  </div>
  <div class="spacer"></div>
</div>
<!--model_box-->
</div>
<div class="devider_1"></div>
<div class="spacer"></div>
<?php get_footer(); ?>
