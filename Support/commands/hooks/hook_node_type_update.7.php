/**
 * Implements hook_node_type_update().
 */
function <?php print $basename; ?>_node_type_update(\$info) {
  ${1:if (!empty(\$info->old_type) && \$info->old_type != \$info->type) {
    \$setting = variable_get('comment_' . \$info->old_type, COMMENT_NODE_OPEN);
    variable_del('comment_' . \$info->old_type);
    variable_set('comment_' . \$info->type, \$setting);
  }}
}

$2