array(
  'title' => t('${1:Page title}'),
  'description' => t('${2:Your description goes here.}'),
  'access' => ${3:user_access('${4:administer <?php print $basename; ?>}')},
  'callback' => '${5:drupal_get_form}',
  'callback arguments' => array('${6:<?php print $basename; ?>_settings}'),$7
);
$8