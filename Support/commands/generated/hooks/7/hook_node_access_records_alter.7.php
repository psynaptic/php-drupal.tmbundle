/**
 * Implements hook_node_access_records_alter().
 */
function <?php print $basename; ?>_node_access_records_alter(&\$grants, \$node) {
  ${1:// Our module allows editors to mark specific articles with the 'is_preview'
  // field. If the node being saved has a TRUE value for that field, then only
  // our grants are retained, and other grants are removed. Doing so ensures
  // that our rules are enforced no matter what priority other grants are given.
  if (\$node->is_preview) {
    // Our module grants are set in \$grants['example'].
    \$temp = \$grants['example'];
    // Now remove all module grants but our own.
    \$grants = array('example' => \$temp);
  \}}
}

$2