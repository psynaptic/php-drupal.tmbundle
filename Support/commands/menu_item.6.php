array(
  'title' => '${1:Page title}',
  'description' => '${2:Your description goes here.}',
  'access arguments' => ${3:array('${4:administer <?php print $basename; ?>}')},
  'page callback' => '${5:drupal_get_form}',
  'page arguments' => array('${6:<?php print $basename; ?>_settings}'),$7
);
$8