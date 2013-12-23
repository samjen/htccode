<?php
/*
 * Template Name: Product Details Template
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
  </div>
  <div class="imei_ch_box">
    <h2>IMEI :</h2>
    <form>
      <input class="type_aera_imei" type="text"  value="  " onblur="if(this.value=='') this.value='  ';" onfocus="if(this.value=='  ') this.value='';"  />
      <input class="sub_btn_imei" type="submit" value="Check Availability" />
    </form>
  </div>
  <div id="clr">
    <h3> <span>Instructions</span> <br />
      <br />
      <?php $custom_fields = get_post_custom();
	$mykey_values = $custom_fields['wpcf-instruction']; foreach ( $mykey_values as $key => $value ) {?>
      <?php if($value!=''){echo $value;}?>
      <?php } ?>
    </h3>
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
