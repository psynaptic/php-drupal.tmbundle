/**
 * Format the selection field for choosing terms
 * (by default the default selection field is used).
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_taxonomy_term_select(\$element) {
  return theme('select', \$element);
}

$2