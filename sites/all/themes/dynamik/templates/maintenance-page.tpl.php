<html>
  <head>
  <?php global $root; print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
   <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/bootstrap/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/bootstrap/css/bootstrap-responsive.css">
   <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/css/style.css">
   <link rel="stylesheet" class="switch" href="<?php echo $root;?>/css/colors/default.css" media="screen" />

  </head>
  <body>
  <div id="maintenance" class="container"><!-- Begin main container -->
    <div class="row">
      <div class="span12">
        <div class="maintenance_logo">
        <?php if (theme_get_setting('branding_type') == 'logo'): ?>
          <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
        <?php endif; ?>
        <?php if (theme_get_setting('branding_type') == 'text'): ?>
          <h2 id="site_name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print variable_get('site_name'); ?></span></a>
          </h2>
          <h3 id="site_slogan"><?php print variable_get('site_slogan'); ?></h2>
        <?php endif; ?>
        </div>
        <div class="maintenance_message">
        <?php if ($title): ?>
          <h1 class="maintenance_title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print $content; ?>
        </div>
      </div>
    </div>
  </div> <!--/Container -->
  </body>
</html>