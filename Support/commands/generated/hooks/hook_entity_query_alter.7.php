/**
 * Implements hook_entity_query_alter().
 */
function <?php print $basename; ?>_entity_query_alter(\$query) {
  ${1:\$query->executeCallback = 'my_module_query_callback';}
}

$2