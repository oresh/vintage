<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['one']: First column
 *   $content['two']: Second column.
 */
?>
<?php $panel_class = check_plain((isset($settings['panel_class']) && $settings['panel_class']) ? $settings['panel_class'] : ''); ?>
<?php if (isset($settings['use_container']) && $settings['use_container']) {$use_container = TRUE;} else {$use_container = FALSE;} ?>
<?php if (isset($settings['default_behavior']) && $settings['default_behavior']) {$default_behavior = TRUE;} else {$default_behavior = FALSE;} ?>
<div class="panel-two-column clearfix container-fluid <?php print $panel_class; ?>" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['one'] OR $content['two']): ?>
    <?php if ($use_container): ?>
      <div class="container">
    <?php endif; ?>
      <div class="row">
        <?php if (isset($content['one']) && $content['one']): ?>
          <?php if ($default_behavior): ?>
            <div class="col-md-6">
          <?php endif; ?>
          <?php print $content['one']; ?>
          <?php if ($default_behavior): ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <?php if (isset($content['two']) && $content['two']): ?>
          <?php if ($default_behavior): ?>
            <div class="col-md-6">
          <?php endif; ?>
          <?php print $content['two']; ?>
          <?php if ($default_behavior): ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php if ($use_container): ?>
      </div>
    <?php endif; ?>
  <?php endif; ?>
</div>
