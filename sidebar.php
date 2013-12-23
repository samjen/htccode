<?php
/**
 * @package WordPress
 * @subpackage HTC Code
 */
?>

<div class="box_3">
  <div class="box3cnt">
    <div class="box3cnt2">
      <form>
        <input class="src_aera" type="text"  value="Search Here." onblur="if(this.value=='') this.value='Search Here.';" onfocus="if(this.value=='Search Here.') this.value='';"  />
        <input class="sub_btn" type="submit" value="" />
      </form>
      <div class="spacer"></div>
      <div class="unlock">
        <h2>Unlock <span>HTC PHone</span></h2>
      </div>
      <div class="selectoption">
        <form action="#" method="post" accept-charset="utf-8" class="listform">
          <select name="country" class="listform" tabindex="2">
            <option class="listoption" value="">Choose Your Model</option>
            <?php
				  $pages = get_pages('child_of=7,9');
				  foreach ($pages as $page) {
					 $item =  '<option class="listoption" value=""><a href="'.get_permalink($page->ID).'" title="Click here to go to the product details">'.$page->post_title.'</a></option>';
					echo $item;
				  }
				 ?>
            
          </select>
        </form>
        
      </div>
      <div class="spacer"></div>
      <div class="unlock">
        <h2>New <span>Arrivals</span></h2>
      </div>
      <div class="set_imag"><img src="<?php bloginfo( 'template_url' ); ?>/images/set.png" /></div>
      <div class="unlock">
        <h2>Stay <span>Connected</span></h2>
      </div>
      <div class="cnct"> <a href="#" target="_blank">
        <div class="social" id="fb"> </div>
        </a> <a href="#" target="_blank">
        <div class="social" id="tw"> </div>
        </a> <a href="#" target="_blank">
        <div class="social" id="rss"> </div>
        </a> </div>
    </div>
    <!--box3cnt2--> 
  </div>
</div>
