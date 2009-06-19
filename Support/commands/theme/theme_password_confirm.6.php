/**
 * Format a password_confirm item.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: title, value, id, required, error.
 * @return
 *   A themed HTML string representing the form item.
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_password_confirm(\$element) {
  return theme('form_element', \$element, \$element['#children']);
}

$2