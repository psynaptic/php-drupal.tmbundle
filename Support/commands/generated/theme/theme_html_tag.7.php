/**
 * Implements theme_html_tag().
 */
function <?php print $basename; ?>_html_tag(\$variables) {
  ${1:\$element = \$variables['element'];
  if (!isset(\$element['#value'])) {
    return '<' . \$element['#tag'] . drupal_attributes(\$element['#attributes']) . " />\n";
  \}
  else {
    \$output = '<' . \$element['#tag'] . drupal_attributes(\$element['#attributes']) . '>';
    if (isset(\$element['#value_prefix'])) {
      \$output .= \$element['#value_prefix'];
    \}
    \$output .= \$element['#value'];
    if (isset(\$element['#value_suffix'])) {
      \$output .= \$element['#value_suffix'];
    \}
    \$output .= '</' . \$element['#tag'] . ">\n";
    return \$output;
  \}}
}

$2