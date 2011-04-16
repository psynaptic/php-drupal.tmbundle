/**
 * Implements theme_comment_block().
 */
function <?php print $basename; ?>_comment_block() {
  ${1:\$items = array();
  \$number = variable_get('comment_block_count', 10);
  foreach (comment_get_recent(\$number) as \$comment) {
    \$items[] = l(\$comment->subject, 'comment/' . \$comment->cid, array('fragment' => 'comment-' . \$comment->cid)) . '&nbsp;<span>' . t('@time ago', array('@time' => format_interval(REQUEST_TIME - \$comment->changed))) . '</span>';
  \}

  if (\$items) {
    return theme('item_list', array('items' => \$items));
  \}
  else {
    return t('No comments available.');
  \}}
}

$2