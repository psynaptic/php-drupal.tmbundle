/**
 * Implements theme_fieldset().
 */
function <?php print $basename; ?>_fieldset(\$variables) {
  ${1:\$element = \$variables['element'];
  element_set_attributes(\$element, array('id'));
  _form_set_class(\$element, array('form-wrapper'));

  \$output = '<fieldset' . drupal_attributes(\$element['#attributes']) . '>';
  if (!empty(\$element['#title'])) {
    // Always wrap fieldset legends in a SPAN for CSS positioning.
    \$output .= '<legend><span class="fieldset-legend">' . \$element['#title'] . '</span></legend>';
  \}
  \$output .= '<div class="fieldset-wrapper">';
  if (!empty(\$element['#description'])) {
    \$output .= '<div class="fieldset-description">' . \$element['#description'] . '</div>';
  \}
  \$output .= \$element['#children'];
  if (isset(\$element['#value'])) {
    \$output .= \$element['#value'];
  \}
  \$output .= '</div>';
  \$output .= "</fieldset>\n";
  return \$output;}
}

$2