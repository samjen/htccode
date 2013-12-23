<?php
/**
 * @package WordPress
 * @subpackage HTC Code
 */

get_header(); ?>

<div class="bodycnt">
  <div class="spacer"></div>
  <div class="devider_2"></div>
  <div class="box_2">
    <h1>
      <?php the_title();?>
    </h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif;?>
  </div>
  <?php get_sidebar(); ?>
  <!--box_3-->
  <div class="spacer"></div>
  <div class="devider_1"></div>
</div>
<!--bodycnt-->
<div class="spacer"></div>
<?php get_footer(); ?>
