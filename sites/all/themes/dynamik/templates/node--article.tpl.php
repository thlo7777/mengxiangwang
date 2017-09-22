<?php global $root, $base_url; $share_url = $base_url.'/node/'.$node->nid; $read_url="node/".$node->nid?>
<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>

  <?php if ($user_picture || $display_submitted || !$page): ?>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2 class="node_title" <?php print $title_attributes; ?>><div class="node_title_wrap"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></div></h2><div class="triangle"></div>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
  
    <?php if ($display_submitted): ?>
      <ul class="meta">
        <li><i class="icon-user"></i> by <?php print $name; ?></li>
        <li><i class="icon-calendar"></i> <?php print format_date($node->created, 'custom', 'M d, Y'); ?></li>
        <li><i class="icon-comment"></i> <a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?> comments</a></li>
     </ul>
     <?php if (render($content['field_tags'])): ?>  
     <div class="tags"><i class="icon-tags"></i><?php print render($content['field_tags']); ?></div>
     <?php endif; ?>
    <?php endif; ?>
     <div class="clearfix"></div>
    <div class="post_image"><?php print render($content['field_image']); ?></div>
  <?php endif; ?>
  
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['taxonomy_forums']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_image']);
      print render($content);
    ?>
  </div>
  
    <div class="post_share_wrap">
  </div>

    
    <div class="read_more">
    <?php if($teaser): ?>
      <button class="btn" type="button"> <?php print l(t('Read more'),   $read_url, array('attributes' => array('class' => t('newreadmore')))); ?> </button>
    <?php endif;?>

    </div>
  <div class="clearfix"></div>

  <?php print render($content['comments']); ?>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>
