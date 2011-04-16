/**
 * Implements hook_comment_delete().
 */
function <?php print $basename; ?>_comment_delete(\$comment) {
  ${1:drupal_set_message(t('Comment: @subject has been deleted', array('@subject' => \$comment->subject)));}
}

$2