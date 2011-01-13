/**
 * Implements hook_comment_unpublish().
 */
function <?php print $basename; ?>_comment_unpublish(\$comment) {
  ${1:drupal_set_message(t('Comment: @subject has been unpublished', array('@subject' => \$comment->subject)));}
}

$2