<?php
/*
 * Template Name: Home Template
*/
get_header(); ?>

<div class="slider_box">
  <div id="da-slider" class="da-slider">
    <div class="da-slide">
      <h2>
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-first-banner-title']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </h2>
      <p>
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-first-banner-description']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </p>
      <div class="da-img"><img src="<?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-first-banner-image']; foreach ( $mykey_values as $key => $value ) {?>
      <?php if($value!=''){echo $value;}?>
      <?php } ?>" alt="image01" /></div>
    </div>
    <div class="da-slide">
      <h2>
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-second-banner-title']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </h2>
      <p>
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-second-banner-description']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </p>
      <div class="da-img"><img src="<?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-second-banner-image']; foreach ( $mykey_values as $key => $value ) {?>
      <?php if($value!=''){echo $value;}?>
      <?php } ?>" alt="image01" /></div>
    </div>
    <div class="da-slide">
      <h2>
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-third-banner-title']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </h2>
      <p>
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-third-banner-description']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </p>
      <div class="da-img"><img src="<?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-third-banner-image']; foreach ( $mykey_values as $key => $value ) {?>
      <?php if($value!=''){echo $value;}?>
      <?php } ?>" alt="image01" /></div>
    </div>
    <div class="da-slide">
      <h2>
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-fourth-banner-title']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </h2>
      <p>
        <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-fourth-banner-description']; foreach ( $mykey_values as $key => $value ) {?>
        <?php if($value!=''){echo $value;}?>
        <?php } ?>
      </p>
      <div class="da-img"><img src="<?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-fourth-banner-image']; foreach ( $mykey_values as $key => $value ) {?>
      <?php if($value!=''){echo $value;}?>
      <?php } ?>" alt="image01" /></div>
    </div>
    <nav class="da-arrows"> <span class="da-arrows-prev"></span> <span class="da-arrows-next"></span> </nav>
  </div>
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
