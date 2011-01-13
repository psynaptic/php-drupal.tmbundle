/**
 * Implements hook_field_attach_prepare_translation_alter().
 */
function <?php print $basename; ?>_field_attach_prepare_translation_alter(&\$entity, \$context) {
  ${1:if (\$context['entity_type'] == 'custom_entity_type') {
    \$entity->custom_field = \$context['source_entity']->custom_field;
  \}}
}

$2