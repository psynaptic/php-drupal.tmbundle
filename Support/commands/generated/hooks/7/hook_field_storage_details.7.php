/**
 * Implements hook_field_storage_details().
 */
function <?php print $basename; ?>_field_storage_details(\$field) {
  ${1:\$details = array();

  // Add field columns.
  foreach ((array) \$field['columns'] as \$column_name => \$attributes) {
    \$real_name = _field_sql_storage_columnname(\$field['field_name'], \$column_name);
    \$columns[\$column_name] = \$real_name;
  \}
  return array(
    'sql' => array(
      FIELD_LOAD_CURRENT => array(
        _field_sql_storage_tablename(\$field) => \$columns,
      ),
      FIELD_LOAD_REVISION => array(
        _field_sql_storage_revision_tablename(\$field) => \$columns,
      ),
    ),
  );}
}

$2