<p>
<?php print t('From site giorgio-ferretti.it received a request to change the price of goods.'); ?>
</p>
<ul>
  <li>
  <strong><?php print t('Model:'); ?></strong> <?php print l($node->model, 'node/' . $node->nid); ?>
  </li>
  <li>
  <strong><?php print t('Percent:'); ?></strong> <?php print $percent; ?>
  </li>
  <li>
  <strong><?php print t('Price Region:'); ?></strong> <?php print $current_region; ?>
  </li>
  <li>
  <strong><?php print t('Current Price:'); ?></strong> <?php print $current_price; ?>
  </li>
  <li>
  <strong><?php print t('New Price:'); ?></strong> <?php print $new_price; ?>
  </li>
</ul>
