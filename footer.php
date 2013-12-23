<?php
/**
 * @package WordPress
 * @subpackage HTC Code
 */
?>

<div class="footer">
  <div class="bodycnt">
    <div class="foot_box">
      <div class="box1">
        <h2>Total GSM Services Ltd.</h2>
        <br />
        <h3>You can contact as via Email and Phone. For further 
          queries related to unlocks, please visit our Forum.</h3>
        <div class="flogo"><a href="<?php bloginfo( 'siteurl' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logof.png" /></a></div>
      </div>
      <div class="box2">
        <ul>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu') ); ?>
        </ul>
      </div>
      <div class="box2">
        <div class="spac">
          <h2>Get In Touch</h2>
          <div class="addres">
            <div class="aimg"><img src="<?php bloginfo( 'template_url' ); ?>/images/man.png" /></div>
            <div class="atxt">
              <h3>Hollywood Plaza, Nathan Road<br />
                Mongkok KLN,HONG KONG</h3>
            </div>
          </div>
          <div class="spacer"></div>
          <div class="devider_3"></div>
          <div class="addres">
            <div class="aimg"><img src="<?php bloginfo( 'template_url' ); ?>/images/lf.png" /></div>
            <div class="atxt">
              <h3>+91 9900521442</h3>
            </div>
          </div>
          <div class="spacer"></div>
          <div class="devider_3"></div>
          <div class="addres">
            <div class="aimg"><img src="<?php bloginfo( 'template_url' ); ?>/images/mail.png" /></div>
            <a href="mailto:admin@totalgsm.org">
            <div class="atxt3">
              <h3>admin@totalgsm.org</h3>
            </div>
            </a> </div>
        </div>
      </div>
      <!--box_2-->
      <div class="spacer"></div>
    </div>
  </div>
</div>
<div class="spacer"></div>
<div class="cpyrt">
  <div class="cpyrt_cntnt">
    <div class="txt">
      <div class="ddtxt">Copyright © 2013. All rights reserved.</div>
    </div>
    <div class="ddvlp">
      <h3>Designed & Developed by</h3>
      <a href="http://www.webhubsolution.com/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo6.png" height="48" width="122" title="Web Hub Solution" alt="Web Hub Solution"/></a></div>
  </div>
</div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.cslider.js"></script> 
<script type="text/javascript">
	$(function() {
	
		$('#da-slider').cslider();
		
	});
</script>
</body></html>