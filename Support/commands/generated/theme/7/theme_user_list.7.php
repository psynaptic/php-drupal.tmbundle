/**
 * Implements theme_user_list().
 */
function <?php print $basename; ?>_user_list(\$variables) {
  ${1:\$users = \$variables['users'];
  \$title = \$variables['title'];

  if (!empty(\$users)) {
    foreach (\$users as \$user) {
      \$items[] = theme('username', array('account' => \$user));
    \}
  \}
  return theme('item_list', array('items' => \$items, 'title' => \$title));}
}

$2