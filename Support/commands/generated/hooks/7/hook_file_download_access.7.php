/**
 * Implements hook_file_download_access().
 */
function <?php print $basename; ?>_file_download_access(\$field, \$entity_type, \$entity) {
  ${1:if (\$entity_type == 'node') {
    return node_access('view', \$entity);
  \}}
}

$2