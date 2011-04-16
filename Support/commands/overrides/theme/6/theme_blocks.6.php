/**
 * Return a set of blocks available for the current user.
 *
 * @param \$region
 *   Which set of blocks to retrieve.
 * @return
 *   A string containing the themed blocks for this region.
 */
function <?php print $basename; ?>_blocks(\$region) {
  \$output = '';

  if (\$list = block_list(\$region)) {
    foreach (\$list as \$key => \$block) {
      // \$key == <i>module</i>_<i>delta</i>
      \$output .= theme('block', \$block);
    }
  }

  // Add any content assigned to this region through drupal_set_content() calls.
  \$output .= drupal_get_content(\$region);

  return \$output;
}

$1