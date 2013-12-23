<?php
/**
 * @package WordPress
 * @subpackage HTC Code
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php wp_title('&laquo;', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<noscript>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/noslide.css" />
</noscript>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.custom.28468.js"></script>
<link href="<?php bloginfo( 'template_url' ); ?>/css/style_menu.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo( 'template_url' ); ?>/js/menu_min_js_1.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/menu_2.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/main.js" type="text/javascript"></script>
<script>
$(document).ready(function(){$(".megamenu").megamenu();});
</script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head><body>
<div class="page">
<div class="language_bar">
  <ul>
    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/french.png" /></a></li>
    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/german.png" /></a></li>
    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/italy.png" /></a></li>
    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/spain.png" /></a></li>
  </ul>
</div>
<div class="bodycnt">
  <div class="logo">
    <div class="logo_box"><a href="<?php bloginfo( 'siteurl' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" /></a></div>
  </div>
  <div class="drpmenu"> 
    <!--/* ################    MENU BAR   ################################################ */-->
    
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '<ul class="megamenu skyblue"><li style="display: list-item;" class="grid"></li>%3$s</ul>', 'walker' => new Child_Wrap()) ); ?>
    
    <!--/* ################    MENU BAR [end]  ################################################ */--> 
    
  </div>
</div>
<!--bodycnt-->

<div class="spacer"></div>
