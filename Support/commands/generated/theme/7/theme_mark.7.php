/**
 * Implements theme_mark().
 */
function <?php print $basename; ?>_mark(\$variables) {
  ${1:\$type = \$variables['type'];
  global \$user;
  if (\$user->uid) {
    if (\$type == MARK_NEW) {
      return ' <span class="marker">' . t('new') . '</span>';
    \}
    elseif (\$type == MARK_UPDATED) {
      return ' <span class="marker">' . t('updated') . '</span>';
    \}
  \}}
}

$2