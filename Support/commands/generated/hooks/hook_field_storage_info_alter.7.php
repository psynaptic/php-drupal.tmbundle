/**
 * Implements hook_field_storage_info_alter().
 */
function <?php print $basename; ?>_field_storage_info_alter(&\$info) {
  ${1:// Add a setting to a storage type.
  \$info['field_sql_storage']['settings'] += array(
    'mymodule_additional_setting' => 'default value',
  );}
}

$2