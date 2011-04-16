/**
 * Implements theme_dblog_filters().
 */
function <?php print $basename; ?>_dblog_filters(\$form) {
  ${1:\$output = '';
  foreach (element_children(\$form['status']) as \$key) {
    \$output .= drupal_render(\$form['status'][\$key]);
  \}
  \$output .= '<div id="dblog-admin-buttons">'. drupal_render(\$form['buttons']) .'</div>';
  return \$output;}
}

$2