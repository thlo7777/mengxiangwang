<?php 

dynamik_header($page); // Call Header 

  if (theme_get_setting('front_page_template') == 'drupal') {
    include(drupal_get_path('theme', 'dynamik').'/includes/page.php'); 
  }
  else {
    if (theme_get_setting('enable_slider') == '1' && theme_get_setting('slider_type') == 'default' ) {
  	  dynamik_elastic_image_slider($page); 
  	} 
  	
  	if (theme_get_setting('enable_slider') == '1' && theme_get_setting('slider_type') == 'nivo' ) {
  	  dynamik_nivo_slider($page); 
  	} 
  	
  	elseif (theme_get_setting('enable_slider') == '1' && theme_get_setting('slider_type') == 'bootstrap' ) {
  	  dynamik_bootstrap_slider($page); 
  	} 

    dynamik_panels($page); dynamik_highlight($page); dynamik_front_page_region($page); // Call Front Page Sections
  }
  
dynamik_footer($page); // Call Footer

?>