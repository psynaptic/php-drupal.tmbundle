/**
 * Implements hook_field_presave().
 */
function <?php print $basename; ?>_field_presave(\$entity_type, \$entity, \$field, \$instance, \$langcode, &\$items) {
  ${1:if (\$field['type'] == 'number_decimal') {
    // Let PHP round the value to ensure consistent behavior across storage
    // backends.
    foreach (\$items as \$delta => \$item) {
      if (isset(\$item['value'])) {
        \$items[\$delta]['value'] = round(\$item['value'], \$field['settings']['scale']);
      \}
    \}
  \}}
}

$2