/**
 * Format a checkbox.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used:  title, value, return_value, description, required
 * @return
 *   A themed HTML string representing the checkbox.
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_checkbox(\$element) {
  _form_set_class(\$element, array('form-checkbox'));
  \$checkbox = '<input ';
  \$checkbox .= 'type="checkbox" ';
  \$checkbox .= 'name="'. \$element['#name'] .'" ';
  \$checkbox .= 'id="'. \$element['#id'] .'" ' ;
  \$checkbox .= 'value="'. \$element['#return_value'] .'" ';
  \$checkbox .= \$element['#value'] ? ' checked="checked" ' : ' ';
  \$checkbox .= drupal_attributes(\$element['#attributes']) .' />';

  if (!is_null(\$element['#title'])) {
    \$checkbox = '<label class="option" for="'. \$element['#id'] .'">'. \$checkbox .' '. \$element['#title'] .'</label>';
  }

  unset(\$element['#title']);
  return theme('form_element', \$element, \$checkbox);
}

$2