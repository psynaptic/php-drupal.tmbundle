/**
 * Implements hook_entity_info_alter().
 */
function <?php print $basename; ?>_entity_info_alter(&\$entity_info) {
  ${1:// Set the controller class for nodes to an alternate implementation of the
  // DrupalEntityController interface.
  \$entity_info['node']['controller class'] = 'MyCustomNodeController';}
}

$2