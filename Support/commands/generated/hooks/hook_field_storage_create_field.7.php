/**
 * Implements hook_field_storage_create_field().
 */
function <?php print $basename; ?>_field_storage_create_field(\$field) {
  ${1:\$schema = _field_sql_storage_schema(\$field);
  foreach (\$schema as \$name => \$table) {
    db_create_table(\$name, \$table);
  \}
  drupal_get_schema(NULL, TRUE);}
}

$2