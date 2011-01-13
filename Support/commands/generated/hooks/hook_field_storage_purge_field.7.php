/**
 * Implements hook_field_storage_purge_field().
 */
function <?php print $basename; ?>_field_storage_purge_field(\$field) {
  ${1:\$table_name = _field_sql_storage_tablename(\$field);
  \$revision_name = _field_sql_storage_revision_tablename(\$field);
  db_drop_table(\$table_name);
  db_drop_table(\$revision_name);}
}

$2