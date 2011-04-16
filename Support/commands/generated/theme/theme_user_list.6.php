/**
 * Implements theme_user_list().
 */
function <?php print $basename; ?>_user_list(\$users, \$title = NULL) {
  ${1:if (!empty(\$users)) {
    foreach (\$users as \$user) {
      \$items[] = theme('username', \$user);
    \}
  \}
  return theme('item_list', \$items, \$title);}
}

$2