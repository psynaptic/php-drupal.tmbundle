/**
 * Implements theme_radios().
 */
function <?php print $basename; ?>_radios(\$variables) {
  ${1:\$element = \$variables['element'];
  \$attributes = array();
  if (isset(\$element['#id'])) {
    \$attributes['id'] = \$element['#id'];
  \}
  \$attributes['class'] = 'form-radios';
  if (!empty(\$element['#attributes']['class'])) {
    \$attributes['class'] .= ' ' . implode(' ', \$element['#attributes']['class']);
  \}
  return '<div' . drupal_attributes(\$attributes) . '>' . (!empty(\$element['#children']) ? \$element['#children'] : '') . '</div>';}
}

$2