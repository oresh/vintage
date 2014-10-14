<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row">
  <div class="col-md-3">
    <?php foreach ($rows as $id => $row): ?>
      <?php if (($id+1) % 4 == 1): ?>
        <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
          <?php print $row; ?>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="col-md-3">
    <?php foreach ($rows as $id => $row): ?>
      <?php if (($id+1) % 4 == 2): ?>
        <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
          <?php print $row; ?>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="col-md-3">
    <?php foreach ($rows as $id => $row): ?>
      <?php if (($id+1) % 4 == 3): ?>
        <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
          <?php print $row; ?>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="col-md-3">
    <?php foreach ($rows as $id => $row): ?>
      <?php if (($id+1) % 4 == 0): ?>
        <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
          <?php print $row; ?>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
