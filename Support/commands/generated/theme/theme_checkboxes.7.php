/**
 * Implements theme_checkboxes().
 */
function <?php print $basename; ?>_checkboxes(\$variables) {
  ${1:\$element = \$variables['element'];
  \$attributes = array();
  if (isset(\$element['#id'])) {
    \$attributes['id'] = \$element['#id'];
  \}
  \$attributes['class'][] = 'form-checkboxes';
  if (!empty(\$element['#attributes']['class'])) {
    \$attributes['class'] = array_merge(\$attributes['class'], \$element['#attributes']['class']);
  \}
  return '<div' . drupal_attributes(\$attributes) . '>' . (!empty(\$element['#children']) ? \$element['#children'] : '') . '</div>';}
}

$2