<?php
/*
 * Template Name: Product Details with Payment Template
*/

get_header(); ?>

<div class="devider_box"> </div>
<div class="page_box1">
  <h1>
    <?php the_title();?>
  </h1>
  <div class="page_box1_img">
    <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail('product-thumb');
} 
?>
  </div>
  <div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif;?>
    <h2> Unlock by Code</h2>
    <div class="imei_ch_box2">
      <h3>Please include IMEI and S/N no</h3>
      <form>
        <input class="type_aera_imei2" type="text"  value="  " onblur="if(this.value=='') this.value='  ';" onfocus="if(this.value=='  ') this.value='';"  />
        <input class="sub_btn_imei2" type="submit" value="" />
      </form>
    </div>
  </div>
  <div id="clr">
    <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-unlock-code']; foreach ( $mykey_values as $key => $value ) {?>
    <?php if($value!=''){echo $value;}?>
    <?php } ?>
    <div class="spacer"></div>
    <div>
      <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-unlock-by-usb']; foreach ( $mykey_values as $key => $value ) {?>
      <?php if($value!=''){echo $value;}?>
      <?php } ?>
    </div>
    <div class="bynow"><img src="<?php bloginfo( 'template_url' ); ?>/images/btn_buynow.gif" /></div>
  </div>
</div>
<!--page_box1-->

<div class="devider_1"></div>
<div class="spacer"></div>
<div class="page_box2">
  <h1>Join This Discussion</h1>
  <?php comments_template(); ?>
</div>
</div>
<!--page_box1-->

<div class="devider_1"></div>
<div class="spacer"></div>
<?php get_footer(); ?>
