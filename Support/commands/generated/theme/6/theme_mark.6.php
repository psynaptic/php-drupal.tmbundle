/**
 * Implements theme_mark().
 */
function <?php print $basename; ?>_mark(\$type = MARK_NEW) {
  ${1:global \$user;
  if (\$user->uid) {
    if (\$type == MARK_NEW) {
      return ' <span class="marker">'. t('new') .'</span>';
    \}
    else if (\$type == MARK_UPDATED) {
      return ' <span class="marker">'. t('updated') .'</span>';
    \}
  \}}
}

$2