/**
 * Implements theme_blocks().
 */
function <?php print $basename; ?>_blocks(\$region) {
  ${1:\$output = '';

  if (\$list = block_list(\$region)) {
    foreach (\$list as \$key => \$block) {
      // \$key == <i>module</i>_<i>delta</i>
      \$output .= theme('block', \$block);
    \}
  \}

  // Add any content assigned to this region through drupal_set_content() calls.
  \$output .= drupal_get_content(\$region);

  return \$output;}
}

$2