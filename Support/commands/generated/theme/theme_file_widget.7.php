/**
 * Implements theme_file_widget().
 */
function <?php print $basename; ?>_file_widget(\$variables) {
  ${1:\$element = \$variables['element'];
  \$output = '';

  // The "form-managed-file" class is required for proper AJAX functionality.
  \$output .= '<div class="file-widget form-managed-file clearfix">';
  if (\$element['fid']['#value'] != 0) {
    // Add the file size after the file name.
    \$element['filename']['#markup'] .= ' <span class="file-size">(' . format_size(\$element['#file']->filesize) . ')</span> ';
  \}
  \$output .= drupal_render_children(\$element);
  \$output .= '</div>';

  return \$output;}
}

$2