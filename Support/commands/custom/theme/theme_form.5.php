/**
 * Format a form.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: action, method, attributes, children
 * @return
 *   A themed HTML string representing the form.
 */
function ${1:phptemplate}_form(\$element) {
  // Anonymous div to satisfy XHTML compliance.
  \$action = \$element['#action'] ? 'action="' . check_url(\$element['#action']) . '" ' : '';
  return '<form '. \$action .' accept-charset="UTF-8" method="'. \$element['#method'] .'" '. 'id="'. \$element['#id'] .'"'. drupal_attributes(\$element['#attributes']) .">\n<div>". \$element['#children'] ."\n</div></form>\n";
}

$2