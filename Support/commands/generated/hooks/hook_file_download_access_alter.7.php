/**
 * Implements hook_file_download_access_alter().
 */
function <?php print $basename; ?>_file_download_access_alter(&\$grants, \$field, \$entity_type, \$entity) {
  ${1:// For our example module, we always enforce the rules set by node module.
  if (isset(\$grants['node'])) {
    \$grants = array('node' => \$grants['node']);
  \}}
}

$2