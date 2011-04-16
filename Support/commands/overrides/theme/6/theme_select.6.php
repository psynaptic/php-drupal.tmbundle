/**
 * Format a dropdown menu or scrolling selection box.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: title, value, options, description, extra, multiple, required
 * @return
 *   A themed HTML string representing the form element.
 *
 * @ingroup themeable
 *
 * It is possible to group options together; to do this, change the format of
 * \$options to an associative array in which the keys are group labels, and the
 * values are associative arrays in the normal \$options format.
 */
function <?php print $basename; ?>_select(\$element) {
  \$select = '';
  \$size = \$element['#size'] ? ' size="'. \$element['#size'] .'"' : '';
  _form_set_class(\$element, array('form-select'));
  \$multiple = \$element['#multiple'];
  return theme('form_element', \$element, '<select name="'. \$element['#name'] .''. (\$multiple ? '[]' : '') .'"'. (\$multiple ? ' multiple="multiple" ' : '') . drupal_attributes(\$element['#attributes']) .' id="'. \$element['#id'] .'" '. \$size .'>'. form_select_options(\$element) .'</select>');
}

$1