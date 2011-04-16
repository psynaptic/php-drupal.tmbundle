/**
 * Implements hook_field_delete_revision().
 */
function <?php print $basename; ?>_field_delete_revision(\$entity_type, \$entity, \$field, \$instance, \$langcode, &\$items) {
  ${1:foreach (\$items as \$delta => \$item) {
    // For hook_file_references, remember that this file is being deleted.
    \$item['file_field_name'] = \$field['field_name'];
    if (file_field_delete_file(\$item, \$field)) {
      \$items[\$delta] = NULL;
    \}
  \}}
}

$2