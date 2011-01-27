/**
 * Implements theme_menu_link().
 */
function <?php print $basename; ?>_menu_link(array \$variables) {
  ${1:\$element = \$variables['element'];
  \$sub_menu = '';

  if (\$element['#below']) {
    \$sub_menu = drupal_render(\$element['#below']);
  \}
  \$output = l(\$element['#title'], \$element['#href'], \$element['#localized_options']);
  return '<li' . drupal_attributes(\$element['#attributes']) . '>' . \$output . \$sub_menu . "</li>\n";}
}

$2