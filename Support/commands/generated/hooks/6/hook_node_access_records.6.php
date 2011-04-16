/**
 * Implements hook_node_access_records().
 */
function <?php print $basename; ?>_node_access_records(\$node) {
  ${1:if (node_access_example_disabling()) {
    return;
  \}

  // We only care about the node if it's been marked private. If not, it is
  // treated just like any other node and we completely ignore it.
  if (\$node->private) {
    \$grants = array();
    \$grants[] = array(
      'realm' => 'example',
      'gid' => 1,
      'grant_view' => TRUE,
      'grant_update' => FALSE,
      'grant_delete' => FALSE,
      'priority' => 0,
    );

    // For the example_author array, the GID is equivalent to a UID, which
    // means there are many many groups of just 1 user.
    \$grants[] = array(
      'realm' => 'example_author',
      'gid' => \$node->uid,
      'grant_view' => TRUE,
      'grant_update' => TRUE,
      'grant_delete' => TRUE,
      'priority' => 0,
    );
    return \$grants;
  \}}
}

$2