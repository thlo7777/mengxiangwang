<?php 

function dynamik_nivo_slider($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>
					<div class="row">
            <div class="span12">
              <div class="slider-wrapper theme-default">
                
                <div id="slider" class="nivoSlider">
	                <?php $i = '1'; while ($i <= $slide_number) { ?>  
	                	<a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
	                  	<img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="slider" title="#htmlcaption<?php echo $i;?>">
	                  </a>
	                <?php $i++; } ?>              
                </div>
                
                <?php $i = '1'; while ($i <= $slide_number) { ?> 
		            <div id="htmlcaption<?php echo $i;?>" class="nivo-html-caption">
                 <?php echo theme_get_setting('slide_caption_'.$i.''); ?>
                </div>
			          <?php $i++; } ?> 
			          
	            </div>
            </div>
          </div>
          
          <script type="text/javascript">
	          jQuery(document).ready(function ($) {
	          	$('#slider').nivoSlider();
	          });
	        </script>
<?php }

function dynamik_elastic_image_slider($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>
					<div class="row">
            <div class="span12">
              <div id="ei-slider" class="ei-slider">
              
                <ul class="ei-slider-large">
	                <?php $i = '1'; while ($i <= $slide_number) { ?>
	                <li>
	                	<a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
	                  	<img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="slider">
	                  </a>
	                  <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?>
	                  <div class="ei-title">
	                  	<?php echo theme_get_setting('slide_caption_'.$i.''); ?>
	                  </div>
	                  <?php endif; ?>
	                </li>
	                <?php $i++; } ?>        
                </ul>
                <!-- ei-slider-large -->
                
		            <ul class="ei-slider-thumbs">
		            	<li class="ei-slider-element">Current</li>
		              <?php $i = '1'; while ($i <= $slide_number) { ?>
				          <li><a href="#">Slide <?php echo $i; ?></a><img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="thumb" height="60" width="150" /></li>
				          <?php $i++; } ?>
			          </ul>
			          <!-- ei-slider-thumbs -->
	            </div>
	            <!-- ei-slider -->
            </div>
          </div>
          
          <script type="text/javascript">
	          jQuery(document).ready(function ($) {
	          	$('#ei-slider').eislideshow({
								animation			: 'center',
								autoplay			: true,
								slideshow_interval	: 3000,
								titlesFactor		: 0
						  });
	          });
	        </script>
<?php }


function dynamik_bootstrap_slider($page) {
	$slide_number = theme_get_setting('slides_number');
	$i = '1';
?>
  <div class="row">
    <div class="span12">
	  <div id="slider" class="carousel slide">
	   	<div class="carousel-inner">
		<?php while ($i <= $slide_number) { ?>
		  <div class="<?php if ($i == '1') {echo "active ";} ?>item">
		    <a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
		      <img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>">
		    </a>
		  <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?>
		  <div class="carousel-caption">
		    <p><?php echo theme_get_setting('slide_caption_'.$i.''); ?></p>
		  </div><!-- end caption -->
		  <?php endif; ?>
		  </div><!-- end item -->
		<?php $i++; } ?>
		</div><!-- end carousel-inner -->
		<!-- Carousel nav -->
		  <a class="carousel-control left" href="#slider" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#slider" data-slide="next">&rsaquo;</a>
	  </div><!-- end myCarousel -->
    </div> <!-- end span -->
  </div> <!-- end row -->
  
<script type="text/javascript">
jQuery(document).ready(function ($) {
  $('.carousel').carousel({
    interval: 5000
  })
})
</script>

<?php
}

function dynamik_panels($page){ 
  global $root;
  if (theme_get_setting('enable_panels') == "1") { ?>
  <div id="panels"><!-- Begin Panels -->
    <div class="row">
      <div class="span3">
      <?php if(!$page['panel_1']) {?>
	    <div class="panel_icon">
		  <img src="<?php echo $root;?>/images/colors.png">
	    </div>
	    <div class="panel_text">
	      <h3 class="panel_title">Theme Options</h3>
	        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
	    </div>
	  <?php } else { print render($page['panel_1']); }?>
      </div>
      <div class="span3">
      <?php if(!$page['panel_2']) {?>
	    <div class="panel_icon">
		  <img src="<?php echo $root;?>/images/blueprint.png">
	    </div>
	    <div class="panel_text">
	      <h3 class="panel_title">Modern Design</h3>
	        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
	    </div>
	  <?php } else { print render($page['panel_2']); }?>
      </div>
      <div class="span3">
      <?php if(!$page['panel_3']) {?>
	    <div class="panel_icon">
		  <img src="<?php echo $root;?>/images/gear.png">
	    </div>
	    <div class="panel_text">
	      <h3 class="panel_title">Quality Code</h3>
	        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
	    </div>
	  <?php } else { print render($page['panel_3']); }?>  
      </div>
      <div class="span3">
      <?php if(!$page['panel_4']) {?>
	    <div class="panel_icon">
		  <img src="<?php echo $root;?>/images/float.png">
	    </div>
	    <div class="panel_text">
	      <h3 class="panel_title">Expert Support</h3>
	        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
	    </div>
	   <?php } else { print render($page['panel_4']); }?>    
	  </div>
    </div>
  </div><!-- End Panels --> <?php
  }
}

function dynamik_highlight() { 
  if (theme_get_setting('enable_highlight') == '1') { ?>
    <div id="highlight">
	  <div class="row">
	    <div class="span10">
	      <div class="highlight_title"><?php echo theme_get_setting('highlight_title'); ?></div>
	      <div class="highlight_text"><?php echo theme_get_setting('highlight_text'); ?></div>
	    </div>
	    <div id="button_wrap" class="span2">
	      <a href="<?php echo theme_get_setting('highlight_button_link'); ?>"><button id="highlight_button" class="btn btn-large btn-primary" type="button"><?php echo theme_get_setting('highlight_button_text'); ?></button></a>
	    </div>
	  </div>
	</div> <?php
  }
}

function dynamik_front_page_region($page){ ?>
  <div id="front_page">
    <div class="row">
	  <div class="span12">
	    <?php print render($page['front_page']); ?>
	  </div>
	</div>
  </div> <?php 
}

?>