/**
 * Format a radio button.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: required, return_value, value, attributes, title, description
 * @return
 *   A themed HTML string representing the form item group.
 *
 * @ingroup themeable
 */
function <?php print $basename; ?>_radio(\$element) {
  _form_set_class(\$element, array('form-radio'));
  \$output = '<input type="radio" ';
  \$output .= 'id="'. \$element['#id'] .'" ';
  \$output .= 'name="'. \$element['#name'] .'" ';
  \$output .= 'value="'. \$element['#return_value'] .'" ';
  \$output .= (check_plain(\$element['#value']) == \$element['#return_value']) ? ' checked="checked" ' : ' ';
  \$output .= drupal_attributes(\$element['#attributes']) .' />';
  if (!is_null(\$element['#title'])) {
    \$output = '<label class="option" for="'. \$element['#id'] .'">'. \$output .' '. \$element['#title'] .'</label>';
  }

  unset(\$element['#title']);
  return theme('form_element', \$element, \$output);
}

$1