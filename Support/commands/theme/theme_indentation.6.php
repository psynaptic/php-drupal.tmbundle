/**
 * Create a standard indentation div. Used for drag and drop tables.
 *
 * @param \$size
 *   Optional. The number of indentations to create.
 * @return
 *   A string containing indentations.
 */
function ${1:phptemplate}_indentation(\$size = 1) {
  \$output = '';
  for (\$n = 0; \$n < \$size; \$n++) {
    \$output .= '<div class="indentation">&nbsp;</div>';
  }
  return \$output;
}

$2