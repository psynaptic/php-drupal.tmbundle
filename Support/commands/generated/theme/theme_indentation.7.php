/**
 * Implements theme_indentation().
 */
function <?php print $basename; ?>_indentation(\$variables) {
  ${1:\$output = '';
  for (\$n = 0; \$n < \$variables['size']; \$n++) {
    \$output .= '<div class="indentation">&nbsp;</div>';
  \}
  return \$output;}
}

$2