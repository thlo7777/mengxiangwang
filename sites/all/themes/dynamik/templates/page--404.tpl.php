<?php dynamik_header($page); // Call Header ?>
<?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb; } ?>
  <div class="row">  
    <div class="span12">
      <div class="row">
        <div class="error_wrap">
          <div class="error_img">
            <img src="<?php global $root; echo $root;?>/images/404.png" alt="404">
          </div>
         
          <div class="error_text">
            <h2>Page not found</h2>
            <p>We're sorry, but the page you are looking for cannot be found. Try one of the following instead:</p>
            <br>
            <p><a class="btn btn-large" href="<?php print base_path();?>"> Home</a></p>
          </div>    
        
          </div>
          <!--end error wrap-->
       
      </div>
    </div>
  </div>
<?php dynamik_footer($page); // Call Footer ?>