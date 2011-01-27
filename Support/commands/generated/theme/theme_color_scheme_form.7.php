/**
 * Implements theme_color_scheme_form().
 */
function <?php print $basename; ?>_color_scheme_form(\$variables) {
  ${1:\$form = \$variables['form'];

  \$theme = \$form['theme']['#value'];
  \$info = \$form['info']['#value'];
  \$path = drupal_get_path('theme', \$theme) . '/';
  drupal_add_css(\$path . \$info['preview_css']);

  \$preview_js_path = isset(\$info['preview_js']) ? \$path . \$info['preview_js'] : drupal_get_path('module', 'color') . '/' . 'preview.js';
  // Add the JS at a weight below color.js.
  drupal_add_js(\$preview_js_path, array('weight' => -1));

  \$output  = '';
  \$output .= '<div class="color-form clearfix">';
  // Color schemes
  \$output .= drupal_render(\$form['scheme']);
  // Palette
  \$output .= '<div id="palette" class="clearfix">';
  foreach (element_children(\$form['palette']) as \$name) {
    \$output .= drupal_render(\$form['palette'][\$name]);
  \}
  \$output .= '</div>';
  // Preview
  \$output .= drupal_render_children(\$form);
  \$output .= '<h2>' . t('Preview') . '</h2>';
  // Attempt to load preview HTML if the theme provides it.
  \$preview_html_path = DRUPAL_ROOT . '/' . (isset(\$info['preview_html']) ? drupal_get_path('theme', \$theme) . '/' . \$info['preview_html'] : drupal_get_path('module', 'color') . '/preview.html');
  \$output .= file_get_contents(\$preview_html_path);
  // Close the wrapper div.
  \$output .= '</div>';

  return \$output;}
}

$2