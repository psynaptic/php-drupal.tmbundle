/**
 * Implements hook_entity_view().
 */
function <?php print $basename; ?>_entity_view(\$entity, \$type, \$view_mode, \$langcode) {
  ${1:\$entity->content['my_additional_field'] = array(
    '#markup' => \$additional_field,
    '#weight' => 10,
    '#theme' => 'mymodule_my_additional_field',
  );}
}

$2