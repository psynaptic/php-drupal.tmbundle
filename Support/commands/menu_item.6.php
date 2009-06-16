\$items['${1:admin/settings/<?php print $basename; ?>}'] = array(
	'title' => '${2:Menu item}',
	'description' => '${3:The description of the menu item. It is used as title attribute and on the administration overview page.}',
	'page arguments' => array(${4:'form_id'}),
	'access arguments' => array('${5:administer <?php print $basename; ?>}'),
	${6:// Further settings: 'page callback', 'access callback', 'file', 'type'.
	// For more, see http://api.drupal.org/api/function/hook_menu/6}
);
