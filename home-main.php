<?php
/*
 * Template Name: Home Template
*/
get_header(); ?>
<div class="sliderWrap cycle-slideshow" data-cycle-timeout="5000" data-cycle-slides="> .slider" data-cycle-pager="> .pager">
  <div class="slider"><img src="http://webhubsolution.net/projects/htccode/wp-content/uploads/2013/11/baner-1.jpg" alt="" width="1349" height="411" /></div>
  <div class="slider"><img src="http://webhubsolution.net/projects/htccode/wp-content/uploads/2013/11/baner-2.jpg" alt="" width="1349" height="411" /></div>
  <div class="pager"></div>
</div>

<!--slider-->
<div class="bodycnt">
  <div class="box_1">
    <div class="sim_box">
      <div id="sim_hbr1" class="hbr_efct">
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-first-step']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </div>
    </div>
    <div class="sim_box">
      <div id="sim_hbr2" class="hbr_efct">
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-second-step']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </div>
    </div>
    <div class="sim_box">
      <div id="sim_hbr3" class="hbr_efct">
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-third-step']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </div>
    </div>
  </div>
  <!--box_1-->
  <div class="spacer"></div>
  <div class="devider_2"></div>
  <div class="box_2 homecontent">
    <?php

  $my_postid = 5;//This is page id or post id

  $content_post = get_post($my_postid);

  $content = $content_post->post_content;

  $content = apply_filters('the_content', $content);

  $content = str_replace(']]>', ']]>', $content);

  echo $content;

 ?>
  </div>
  <!--box_2-->
  <?php get_sidebar(); ?>
  <!--box_3-->
  <div class="spacer"></div>
  <div class="devider_1"></div>
</div>
<!--bodycnt-->
<div class="spacer"></div>
<?php get_footer(); ?>
