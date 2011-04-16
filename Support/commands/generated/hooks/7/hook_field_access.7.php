/**
 * Implements hook_field_access().
 */
function <?php print $basename; ?>_field_access(\$op, \$field, \$entity_type, \$entity, \$account) {
  ${1:if (\$field['field_name'] == 'field_of_interest' && \$op == 'edit') {
    return user_access('edit field of interest', \$account);
  \}
  return TRUE;}
}

$2