/**
 * Implements theme_radio().
 */
function <?php print $basename; ?>_radio(\$element) {
  ${1:_form_set_class(\$element, array('form-radio'));
  \$output = '<input type="radio" ';
  \$output .= 'id="'. \$element['#id'] .'" ';
  \$output .= 'name="'. \$element['#name'] .'" ';
  \$output .= 'value="'. \$element['#return_value'] .'" ';
  \$output .= (check_plain(\$element['#value']) == \$element['#return_value']) ? ' checked="checked" ' : ' ';
  \$output .= drupal_attributes(\$element['#attributes']) .' />';
  if (!is_null(\$element['#title'])) {
    \$output = '<label class="option" for="'. \$element['#id'] .'">'. \$output .' '. \$element['#title'] .'</label>';
  \}

  unset(\$element['#title']);
  return theme('form_element', \$element, \$output);}
}

$2