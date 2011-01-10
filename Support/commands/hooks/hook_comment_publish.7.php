/**
 * Implements hook_comment_publish().
 */
function <?php print $basename; ?>_comment_publish(\$comment) {
  ${1:drupal_set_message(t('Comment: @subject has been published', array('@subject' => \$comment->subject)));}
}

$2