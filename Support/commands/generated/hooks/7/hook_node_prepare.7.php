/**
 * Implements hook_node_prepare().
 */
function <?php print $basename; ?>_node_prepare(\$node) {
  ${1:if (!isset(\$node->comment)) {
    \$node->comment = variable_get("comment_\$node->type", COMMENT_NODE_OPEN);
  \}}
}

$2