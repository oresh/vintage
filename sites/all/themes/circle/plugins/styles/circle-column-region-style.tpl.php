<?php
/**
 * @file
 * Panel region template
 *
 * Variables available:
 * - $items: Array of panes in this region
 * - $rendered_items: String of rendered panes
 * - $wrapper_classes: Array of wrapper classes
 * - $wrapper_class: String with wrapper class
 * - $has_row: Shows weather to use .row wrapper or not.
 */
?>
<?php if (!isset($use_row)): $use_row = 1; endif; ?>
<div class="<?php print $wrapper_class; ?>">
  <?php if ($has_row && $use_row): ?>
    <div class="row">
  <?php endif; ?>
  <?php print $rendered_items; ?>
  <?php if ($has_row && $use_row): ?>
    </div>
  <?php endif; ?>
</div>
