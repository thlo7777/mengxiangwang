<section id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<hr>
<div class="clearfix"></div>
  <?php if ($content['comments'] && $node->type != 'forum'): ?>
    <?php print render($title_prefix); ?>
    <h3><?php print t('Comments'); ?></h3>
    <?php print render($title_suffix); ?>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

  <?php if ($content['comment_form']): ?>
    <section id="comment-form-wrapper">
      <h3><?php print t('Add new comment'); ?></h3>
      <?php print render($content['comment_form']); ?>
    </section> <!-- /#comment-form-wrapper -->
  <?php endif; ?>
</section> <!-- /#comments -->