/**
 * Implements theme_menu_local_action().
 */
function <?php print $basename; ?>_menu_local_action(\$variables) {
  ${1:\$link = \$variables['element']['#link'];

  \$output = '<li>';
  if (isset(\$link['href'])) {
    \$output .= l(\$link['title'], \$link['href'], isset(\$link['localized_options']) ? \$link['localized_options'] : array());
  \}
  elseif (!empty(\$link['localized_options']['html'])) {
    \$output .= \$link['title'];
  \}
  else {
    \$output .= check_plain(\$link['title']);
  \}
  \$output .= "</li>\n";

  return \$output;}
}

$2