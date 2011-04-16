/**
 * Implements hook_node_presave().
 */
function <?php print $basename; ?>_node_presave(\$node) {
  ${1:if (\$node->nid && \$node->moderate) {
    // Reset votes when node is updated:
    \$node->score = 0;
    \$node->users = '';
    \$node->votes = 0;
  \}}
}

$2