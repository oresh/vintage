<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php

/**
 * Bronze - 1
 * Silver - 2
 * Gold - 3
 * Diamond - 4
 */
 $pricesBuy = array(199, 399, 599, 999);
 $pricesRent = array(99, 159, 299, 399);
 $pricesMonths = array(6, 12, 18);
 $type = intval($content['field_picture_type']['#items'][0]['tid']) - 1;

?>
    <div class="painting-node-upper picture-type-<?php print $content['field_picture_type']['#items'][0]['tid']; ?>">
      <h2 class="node-title">
        <span class="name"><?php print $title; ?></span>
        <?php if (isset($content['field_picture_year']) && !empty($content['field_picture_year'])): ?>
        <span class="sep">, </span><?php print $content['field_picture_year'][0]['#markup']; ?>
        <?php endif; ?>
      </h2>
      
      <?php if (isset($content['field_picture_technique_tax'])): ?>
        <?php print render($content['field_picture_technique_tax']); ?>  
      <?php endif; ?>
      
      <?php if (isset($content['field_picture_width']) && isset($content['field_picture_height'])): ?>
        <?php print $content['field_picture_width'][0]['#markup'] . '<span class="sep">x</span>' . $content['field_picture_height'][0]['#markup']; ?>  
      <?php endif; ?>
      
      <?php if (isset($content['field_painting_signed'])): ?>
        <?php print render($content['field_painting_signed']); ?>  
      <?php endif; ?>
      
      <?php if (isset($content['field_picture_author'])): ?>
        <?php print render($content['field_picture_author']); ?>  
      <?php endif; ?>
      
      <?php if (isset($content['field_picture_type'])): ?>
        <?php print render($content['field_picture_type']); ?>  
      <?php endif; ?>
    
    </div>
    <div class="painting-node-lower">
      <div class="row painting-prices">
        <div class="col-md-6">
          <h3>Buy</h3>
          <p><?php print $pricesBuy[$type]; ?> EUR</p>
        </div>
        <div class="col-md-6 ta-right">
          <h3>Rent</h3>
          <p><?php print $pricesRent[$type]; ?> MDL/Mo.</p>
        </div>
      </div>
      <div class="row">
      <?php for($i = 0; $i < 3; $i++): ?>
        <div class="col-md-4">
          <b><?php print $pricesMonths[$i]; ?> Months</b>
          <em><?php print $pricesMonths[$i] * $pricesRent[$type]; ?> MDL</em>
        </div>
      <?php endfor; ?>
    </div>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
