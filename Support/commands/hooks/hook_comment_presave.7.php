/**
 * Implements hook_comment_presave().
 */
function <?php print $basename; ?>_comment_presave(\$comment) {
  ${1:// Remove leading & trailing spaces from the comment subject.
  \$comment->subject = trim(\$comment->subject);}
}

$2