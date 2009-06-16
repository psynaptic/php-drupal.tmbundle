\$items[] = array(
	'path' => '\${1:admin/settings/<?php print $basename; ?>}',
	'title' => t('\${2:Menu item}'),
	'description' => t('\${3:The description of the menu item. It is used as title attribute and on the administration overview page.}'),
	'callback' => '\${4:drupal_get_form}',
	'callback arguments' => array(\$5),
	'access' => user_access('\${6:administer <?php print $basename; ?>}'),
	'type' => MENU_NORMAL_ITEM,\$7
);