/**
 * Implements theme_node_preview().
 */
function <?php print $basename; ?>_node_preview(\$variables) {
  ${1:\$node = \$variables['node'];

  \$output = '<div class="preview">';

  \$preview_trimmed_version = FALSE;

  \$elements = node_view(clone \$node, 'teaser');
  \$trimmed = drupal_render(\$elements);
  \$elements = node_view(\$node, 'full');
  \$full = drupal_render(\$elements);

  // Do we need to preview trimmed version of post as well as full version?
  if (\$trimmed != \$full) {
    drupal_set_message(t('The trimmed version of your post shows what your post looks like when promoted to the main page or when exported for syndication.<span class="no-js"> You can insert the delimiter "&lt;!--break--&gt;" (without the quotes) to fine-tune where your post gets split.</span>'));
    \$output .= '<h3>' . t('Preview trimmed version') . '</h3>';
    \$output .= \$trimmed;
    \$output .= '<h3>' . t('Preview full version') . '</h3>';
    \$output .= \$full;
  \}
  else {
    \$output .= \$full;
  \}
  \$output .= "</div>\n";

  return \$output;}
}

$2