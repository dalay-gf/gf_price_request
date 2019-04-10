<p>
С сайта giorgio-ferretti.it поступил запрос на изменение цены товара.
</p>
<ul>
  <li>
  <strong>Модель товара: </strong> <?php print l($node->model, 'node/' . $node->nid); ?>
  </li>
  <li>
  <strong>Процент (изменения относительно текущей цены):</strong> <?php print $percent; ?>%
  </li>
  <li>
  <strong>Регион (склад, валюта):</strong> <?php print $current_region; ?>
  </li>
  <li>
  <strong>Текущая цена товара (на региональном складе):</strong> <?php print $current_price; ?>
  </li>
  <li>
  <strong>Новая цена товара:</strong> <?php print $new_price; ?>
  </li>
</ul>
