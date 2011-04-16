/**
 * Implements theme_checkbox().
 */
function <?php print $basename; ?>_checkbox(\$element) {
  ${1:_form_set_class(\$element, array('form-checkbox'));
  \$checkbox = '<input ';
  \$checkbox .= 'type="checkbox" ';
  \$checkbox .= 'name="'. \$element['#name'] .'" ';
  \$checkbox .= 'id="'. \$element['#id'] .'" ' ;
  \$checkbox .= 'value="'. \$element['#return_value'] .'" ';
  \$checkbox .= \$element['#value'] ? ' checked="checked" ' : ' ';
  \$checkbox .= drupal_attributes(\$element['#attributes']) .' />';

  if (!is_null(\$element['#title'])) {
    \$checkbox = '<label class="option" for="'. \$element['#id'] .'">'. \$checkbox .' '. \$element['#title'] .'</label>';
  \}

  unset(\$element['#title']);
  return theme('form_element', \$element, \$checkbox);}
}

$2