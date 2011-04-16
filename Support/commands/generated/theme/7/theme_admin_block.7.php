/**
 * Implements theme_admin_block().
 */
function <?php print $basename; ?>_admin_block(\$variables) {
  ${1:\$block = \$variables['block'];
  \$output = '';

  // Don't display the block if it has no content to display.
  if (empty(\$block['show'])) {
    return \$output;
  \}

  \$output .= '<div class="admin-panel">';
  if (!empty(\$block['title'])) {
    \$output .= '<h3>' . \$block['title'] . '</h3>';
  \}
  if (!empty(\$block['content'])) {
    \$output .= '<div class="body">' . \$block['content'] . '</div>';
  \}
  else {
    \$output .= '<div class="description">' . \$block['description'] . '</div>';
  \}
  \$output .= '</div>';

  return \$output;}
}

$2