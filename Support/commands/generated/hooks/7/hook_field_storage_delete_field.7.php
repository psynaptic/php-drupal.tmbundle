/**
 * Implements hook_field_storage_delete_field().
 */
function <?php print $basename; ?>_field_storage_delete_field(\$field) {
  ${1:// Mark all data associated with the field for deletion.
  \$field['deleted'] = 0;
  \$table = _field_sql_storage_tablename(\$field);
  \$revision_table = _field_sql_storage_revision_tablename(\$field);
  db_update(\$table)
    ->fields(array('deleted' => 1))
    ->execute();

  // Move the table to a unique name while the table contents are being deleted.
  \$field['deleted'] = 1;
  \$new_table = _field_sql_storage_tablename(\$field);
  \$revision_new_table = _field_sql_storage_revision_tablename(\$field);
  db_rename_table(\$table, \$new_table);
  db_rename_table(\$revision_table, \$revision_new_table);
  drupal_get_schema(NULL, TRUE);}
}

$2