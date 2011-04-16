/**
 * Implements hook_comment_update().
 */
function <?php print $basename; ?>_comment_update(\$comment) {
  ${1:// Reindex the node when comments are updated.
  search_touch_node(\$comment->nid);}
}

$2