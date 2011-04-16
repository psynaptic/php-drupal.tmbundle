/**
 * Implements theme_indentation().
 */
function <?php print $basename; ?>_indentation(\$size = 1) {
  ${1:\$output = '';
  for (\$n = 0; \$n < \$size; \$n++) {
    \$output .= '<div class="indentation">&nbsp;</div>';
  \}
  return \$output;}
}

$2