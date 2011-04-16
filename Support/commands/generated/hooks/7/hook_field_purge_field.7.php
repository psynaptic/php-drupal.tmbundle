/**
 * Implements hook_field_purge_field().
 */
function <?php print $basename; ?>_field_purge_field(\$field) {
  ${1:db_delete('my_module_field_info')
    ->condition('id', \$field['id'])
    ->execute();}
}

$2