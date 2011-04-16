/**
 * Implements hook_uninstall().
 */
function <?php print $basename; ?>_uninstall() {
  ${1:drupal_uninstall_schema('upload');
  variable_del('upload_file_types');}
}

$2