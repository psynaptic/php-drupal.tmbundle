/**
 * Implements theme_file_managed_file().
 */
function <?php print $basename; ?>_file_managed_file(\$variables) {
  ${1:\$element = \$variables['element'];

  // This wrapper is required to apply JS behaviors and CSS styling.
  \$output = '';
  \$output .= '<div class="form-managed-file">';
  \$output .= drupal_render_children(\$element);
  \$output .= '</div>';
  return \$output;}
}

$2