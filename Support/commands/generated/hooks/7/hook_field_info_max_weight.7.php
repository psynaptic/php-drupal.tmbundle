/**
 * Implements hook_field_info_max_weight().
 */
function <?php print $basename; ?>_field_info_max_weight(\$entity_type, \$bundle, \$context) {
  ${1:\$weights = array();

  foreach (my_module_entity_additions(\$entity_type, \$bundle, \$context) as \$addition) {
    \$weights[] = \$addition['weight'];
  \}

  return \$weights ? max(\$weights) : NULL;}
}

$2