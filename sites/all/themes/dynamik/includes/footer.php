<?php function dynamik_footer($page){ ?>
  <?php if (theme_get_setting('enable_primary_footer') == '1') : ?>
  <div id="footer">
    <div class="row">
		  <div class="span3">
		    <div class="footer_box">
		      <?php
			      if(!$page['footer_1']) {
	              echo "<h2>Footer 1</h2> Visit /admin/structure/block and add a block to Footer Box 1 to customize.";
	          }
	          else {
		          print render($page['footer_1']);    
	          }
	        ?>
		    </div>
		  </div>
		  <div class="span3">
		    <div class="footer_box">
		      <?php
			      if(!$page['footer_2']) {
	              echo "<h2>Footer 2</h2> Visit /admin/structure/block and add a block to Footer Box 2 to customize.";
	          }
	          else {
		          print render($page['footer_2']);    
	          }
	        ?>
		    </div>
		  </div>
		  <div class="span3">
		    <div class="footer_box">
		      <?php
			      if(!$page['footer_3']) {
	              echo "<h2>Footer 3</h2> Visit /admin/structure/block and add a block to Footer Box 3 to customize.";
	          }
	          else {
		          print render($page['footer_3']);    
	          }
	        ?>
		    </div>
		  </div>
		  <div class="span3">
		    <div class="footer_box">
		      <?php
			      if(!$page['footer_4']) {
	              echo "<h2>Footer 4</h2> Visit /admin/structure/block and add a block to Footer Box 4 to customize.";
	          }
	          else {
		          print render($page['footer_4']);    
	          }
	        ?>
		    </div>
		  </div>
		</div>
	  <hr>
  </div><!-- end footer -->
  <?php endif ?>
  <?php if (theme_get_setting('enable_secondary_footer') == '1') : ?>
  <div id="footer">
    <div class="row">
    
      <div class="span5">
        <div class="secondary_left">
	      	<?php echo theme_get_setting('secondary_footer_left'); ?>
	      </div>
	    </div>
    
      <div class="span6">
      	<div class="secondary_right">
	      	<?php echo theme_get_setting('secondary_footer_right'); ?>
	      </div>
	    </div>
    
    </div>
  </div></div></div>

  <?php endif; ?>
  
</div><!-- end container -->
<?php 
}