<?php 
function dynamik_header($page){
  global $root; 
?>

<div class="container"><!-- Begin main container -->
  <header>
  <?php if (theme_get_setting('enable_panel') == '1' ): ?>
    <div id="panel">
     <?php echo theme_get_setting('panel_text'); ?>
   </div>
  <p class="slideout"><a href="#" class="btn-slide"><img class="circle" src="<?php echo $root;?>/images/half-circle-down.png"></a></p>
  <?php endif ?>
    <div class="row">
      <div class="span4">
        <div class="logo">
          <?php if (theme_get_setting('branding_type') == 'logo'): ?>
          <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
          <?php endif; ?>
          
           <?php if (theme_get_setting('branding_type') == 'text'): ?>
          <h2 id="site_name">
            <a href="<?php print base_path();?>" title="<?php print t('Home'); ?>"><span><?php print variable_get('site_name'); ?></span></a>
          </h2>
        
          <h3 id="site_slogan"><?php print variable_get('site_slogan'); ?></h3>
  
          <?php endif; ?>
          
        </div>
      </div>
      <div class="span8">
        <div id="social">
          <?php if (theme_get_setting('enable_contact') == '1'): ?>
          <div class="contact">
	        <h3 class="contact_number"><?php echo theme_get_setting('contact_text'); ?></h3>
          </div>
          <?php endif ?>
          <div class="icons">
            <ul>
              <?php if (theme_get_setting('twitter_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('twitter_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/twitter-black.png"></a></li><?php endif ?>
             <?php if (theme_get_setting('facebook_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('facebook_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/facebook-black.png"></a></li><?php endif ?>
               <?php if (theme_get_setting('google_plus_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('google_plus_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/gplus-black.png"></a></li><?php endif ?>
               <?php if (theme_get_setting('pinterest_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('pinterest_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/pinterest-black.png"></a></li><?php endif ?>
               <?php if (theme_get_setting('linkedin_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('linkedin_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/linkedin-black.png"></a></li><?php endif ?>
             <?php if (theme_get_setting('flickr_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('flickr_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/flickr-black.png"></a></li><?php endif ?>
             <?php if (theme_get_setting('youtube_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('youtube_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/youtube-black.png"></a></li><?php endif ?>
             <?php if (theme_get_setting('rss_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('rss_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/rss-black.png"></a></li><?php endif ?>
            </ul>  
          </div>
        </div>
      </div>
    </div> 
    <?php if (theme_get_setting('enable_menu') == '1'): ?>
    <div id="menu" class="row">
      <div class="menu-triangle-l"></div><div id="main-menu" class="navigation">
        <div id="menu_wrap">
          <?php print theme('links__system_main_menu', array(
            'attributes' => array(
              'id' => 'main-menu-links',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); 
          ?>
        </div>
      </div> 
      <div class="menu-triangle-r"></div>
    </div> <!-- #menu -->
    <?php endif; ?>
  </header> 
  
<script type="text/javascript">
jQuery(document).ready(function ($) {

  $(".btn-slide").click(function(){
    $("#panel").slideToggle(550);
	$(this).toggleClass("active");
  });
$("#block-menu-menu-speed-nav .menu").removeClass("menu");
  $('ul.menu').superfish();
  $('ul#quotes').quote_rotator();
	
  $('#menu').mobileMenu();
	  
	$("#google_map").fitMaps( {w: '100%', h:'370px'} ); 
  
  $('input[type="submit"]').addClass('btn');
	
  $(".circle").live('click', function() {
    if ($(this).attr("class") == "circle") {
      this.src = this.src.replace("-down","-up");
    } else {
      this.src = this.src.replace("-up","-down");
    }
    $(this).toggleClass("on");
  });
  
  $(".social_icons").live('hover', function() {
    if ($(this).attr("class") == "social_icons") {
      this.src = this.src.replace("-black","-color");
    } else {
      this.src = this.src.replace("-color","-black");
    }
    $(this).toggleClass("on");
  });
  
  $().UItoTop({ easingType: 'easeOutQuart' });
  
  
	jQuery("ul.accordion li").each(function(){
    if(jQuery(this).index() > 0){
    jQuery(this).children(".accordion-content").css('display','none');
    }
    else{
    jQuery(this).find(".accordion-head-image").addClass('active');
    }

    jQuery(this).children(".accordion-head").bind("click", function(){
    jQuery(this).children().addClass(function(){
    if(jQuery(this).hasClass("active")) return "";
      return "active";
    });
    jQuery(this).siblings(".accordion-content").slideDown();
    jQuery(this).parent().siblings("li").children(".accordion-content").slideUp();
    jQuery(this).parent().siblings("li").find(".active").removeClass("active");
    });
  });
  	
});

</script>
<?php }
?>
