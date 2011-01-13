/**
* Format a password field.
*
* @param \$element
*   An associative array containing the properties of the element.
*   Properties used:  title, value, description, size, maxlength, required, attributes
* @return
*   A themed HTML string representing the form.
*/
function ${1:phptemplate}_password(\$element) {
  \$size = \$element['#size'] ? ' size="'. \$element['#size'] .'" ' : '';
  \$maxlength = \$element['#maxlength'] ? ' maxlength="'. \$element['#maxlength'] .'" ' : '';

  _form_set_class(\$element, array('form-text'));
  \$output = '<input type="password" name="'. \$element['#name'] .'" id="'. \$element['#id'] .'" '. \$maxlength . \$size . drupal_attributes(\$element['#attributes']) .' />';
  return theme('form_element', \$element, \$output);
}

$2