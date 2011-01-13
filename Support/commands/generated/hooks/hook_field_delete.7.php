/**
 * Implements hook_field_delete().
 */
function <?php print $basename; ?>_field_delete(\$entity_type, \$entity, \$field, \$instance, \$langcode, &\$items) {
  ${1:list(\$id, \$vid, \$bundle) = entity_extract_ids(\$entity_type, \$entity);
  foreach (\$items as \$delta => \$item) {
    // For hook_file_references(), remember that this is being deleted.
    \$item['file_field_name'] = \$field['field_name'];
    // Pass in the ID of the object that is being removed so all references can
    // be counted in hook_file_references().
    \$item['file_field_type'] = \$entity_type;
    \$item['file_field_id'] = \$id;
    file_field_delete_file(\$item, \$field);
  \}}
}

$2