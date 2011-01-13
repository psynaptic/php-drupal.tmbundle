/**
 * Implements hook_field_prepare_translation().
 */
function <?php print $basename; ?>_field_prepare_translation(\$entity_type, \$entity, \$field, \$instance, \$langcode, &\$items, \$source_entity, \$source_langcode) {
  ${1:// If the translating user is not permitted to use the assigned text format,
  // we must not expose the source values.
  \$field_name = \$field['field_name'];
  \$formats = filter_formats();
  \$format_id = \$source_entity->{\$field_name\}[\$source_langcode][0]['format'];
  if (!filter_access(\$formats[\$format_id])) {
    \$items = array();
  \}}
}

$2