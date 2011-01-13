/**
 * Implements hook_comment_view().
 */
function <?php print $basename; ?>_comment_view(\$comment, \$view_mode, \$langcode) {
  ${1:// how old is the comment
  \$comment->time_ago = time() - \$comment->changed;}
}

$2