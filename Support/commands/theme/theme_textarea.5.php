/**
 * Format a textarea.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: title, value, description, rows, cols, required, attributes
 * @return
 *   A themed HTML string representing the textarea.
 */
function ${1:phptemplate}_textarea(\$element) {
  \$class = array('form-textarea');
  if (\$element['#resizable'] !== FALSE) {
    drupal_add_js('misc/textarea.js');
    \$class[] = 'resizable';
  }

  \$cols = \$element['#cols'] ? ' cols="'. \$element['#cols'] .'"' : '';
  _form_set_class(\$element, \$class);
  return theme('form_element', \$element, '<textarea'. \$cols .' rows="'. \$element['#rows'] .'" name="'. \$element['#name'] .'" id="'. \$element['#id'] .'" '. drupal_attributes(\$element['#attributes']) .'>'. check_plain(\$element['#value']) .'</textarea>');
}

$2