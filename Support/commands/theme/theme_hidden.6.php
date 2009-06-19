/**
 * Format a hidden form field.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used:  value, edit
 * @return
 *   A themed HTML string representing the hidden form field.
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_hidden(\$element) {
  return '<input type="hidden" name="'. \$element['#name'] .'" id="'. \$element['#id'] .'" value="'. check_plain(\$element['#value']) ."\" ". drupal_attributes(\$element['#attributes']) ." />\n";
}

$2