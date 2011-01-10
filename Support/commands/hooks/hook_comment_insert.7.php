/**
 * Implements hook_comment_insert().
 */
function <?php print $basename; ?>_comment_insert(\$comment) {
  ${1:// Reindex the node when comments are added.
  search_touch_node(\$comment->nid);}
}

$2