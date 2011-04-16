/**
 * Implements theme_radio().
 */
function <?php print $basename; ?>_radio(\$variables) {
  ${1:\$element = \$variables['element'];
  \$element['#attributes']['type'] = 'radio';
  element_set_attributes(\$element, array('id', 'name', '#return_value' => 'value'));

  if (isset(\$element['#return_value']) && check_plain(\$element['#value']) == \$element['#return_value']) {
    \$element['#attributes']['checked'] = 'checked';
  \}
  _form_set_class(\$element, array('form-radio'));

  return '<input' . drupal_attributes(\$element['#attributes']) . ' />';}
}

$2