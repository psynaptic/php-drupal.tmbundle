/**
 * Implements hook_node_type_delete().
 */
function <?php print $basename; ?>_node_type_delete(\$info) {
  ${1:variable_del('comment_' . \$info->type);}
}

$2