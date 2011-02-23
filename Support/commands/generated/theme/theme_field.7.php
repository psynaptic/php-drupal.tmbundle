/**
 * Implements theme_field().
 */
function <?php print $basename; ?>_field(\$variables) {
  ${1:\$output = '';

  // Render the label, if it's not hidden.
  if (!\$variables['label_hidden']) {
    \$output .= '<div class="field-label"' . \$variables['title_attributes'] . '>' . \$variables['label'] . ':&nbsp;</div>';
  \}

  // Render the items.
  \$output .= '<div class="field-items"' . \$variables['content_attributes'] . '>';
  foreach (\$variables['items'] as \$delta => \$item) {
    \$classes = 'field-item ' . (\$delta % 2 ? 'odd' : 'even');
    \$output .= '<div class="' . \$classes . '"' . \$variables['item_attributes'][\$delta] . '>' . drupal_render(\$item) . '</div>';
  \}
  \$output .= '</div>';

  // Render the top-level DIV.
  \$output = '<div class="' . \$variables['classes'] . '"' . \$variables['attributes'] . '>' . \$output . '</div>';

  return \$output;}
}

$2