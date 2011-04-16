/**
 * Implements hook_node_view().
 */
function <?php print $basename; ?>_node_view(\$node, \$view_mode, \$langcode) {
  ${1:\$node->content['my_additional_field'] = array(
    '#markup' => \$additional_field,
    '#weight' => 10,
    '#theme' => 'mymodule_my_additional_field',
  );}
}

$2