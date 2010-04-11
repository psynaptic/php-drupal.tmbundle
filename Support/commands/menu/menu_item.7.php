\$items['${1:admin/settings/<?php print $basename; ?>}'] = array(
  'title' => '${2:Menu item}',
  'description' => '${3:The description of the menu item. It is used as title attribute and on the administration overview page.}',
  'page callback' => 'drupal_get_form',
  'page arguments' => array('${4:form_id}'),
  'access arguments' => array('${5:administer <?php print $basename; ?>}'),
);

$6