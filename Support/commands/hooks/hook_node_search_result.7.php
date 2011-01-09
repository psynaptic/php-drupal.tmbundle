/**
 * Implements hook_node_search_result().
 */
function <?php print $basename; ?>_node_search_result(\$node) {
  ${1:\$comments = db_query('SELECT comment_count FROM {node_comment_statistics\} WHERE nid = :nid', array('nid' => \$node->nid))->fetchField();
  return format_plural(\$comments, '1 comment', '@count comments');}
}

$2