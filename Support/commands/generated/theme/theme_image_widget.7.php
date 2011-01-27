/**
 * Implements theme_image_widget().
 */
function <?php print $basename; ?>_image_widget(\$variables) {
  ${1:\$element = \$variables['element'];
  \$output = '';
  \$output .= '<div class="image-widget form-managed-file clearfix">';

  if (isset(\$element['preview'])) {
    \$output .= '<div class="image-preview">';
    \$output .= drupal_render(\$element['preview']);
    \$output .= '</div>';
  \}

  \$output .= '<div class="image-widget-data">';
  if (\$element['fid']['#value'] != 0) {
    \$element['filename']['#markup'] .= ' <span class="file-size">(' . format_size(\$element['#file']->filesize) . ')</span> ';
  \}
  \$output .= drupal_render_children(\$element);
  \$output .= '</div>';
  \$output .= '</div>';

  return \$output;}
}

$2