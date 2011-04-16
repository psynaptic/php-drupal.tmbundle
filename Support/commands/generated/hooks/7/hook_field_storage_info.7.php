/**
 * Implements hook_field_storage_info().
 */
function <?php print $basename; ?>_field_storage_info() {
  ${1:return array(
    'field_sql_storage' => array(
      'label' => t('Default SQL storage'),
      'description' => t('Stores fields in the local SQL database, using per-field tables.'),
      'settings' => array(),
    ),
  );}
}

$2