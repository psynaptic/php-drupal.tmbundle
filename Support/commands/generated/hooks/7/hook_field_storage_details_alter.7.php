/**
 * Implements hook_field_storage_details_alter().
 */
function <?php print $basename; ?>_field_storage_details_alter(&\$details, \$field) {
  ${1:if (\$field['field_name'] == 'field_of_interest') {
    \$columns = array();
    foreach ((array) \$field['columns'] as \$column_name => \$attributes) {
      \$columns[\$column_name] = \$column_name;
    \}
    \$details['drupal_variables'] = array(
      FIELD_LOAD_CURRENT => array(
        'moon' => \$columns,
      ),
      FIELD_LOAD_REVISION => array(
        'mars' => \$columns,
      ),
    );
  \}}
}

$2