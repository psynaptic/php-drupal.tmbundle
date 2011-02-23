/**
 * Implements theme_textfield().
 */
function <?php print $basename; ?>_textfield(\$variables) {
  ${1:\$element = \$variables['element'];
  \$element['#attributes']['type'] = 'text';
  element_set_attributes(\$element, array('id', 'name', 'value', 'size', 'maxlength'));
  _form_set_class(\$element, array('form-text'));

  \$extra = '';
  if (\$element['#autocomplete_path'] && drupal_valid_path(\$element['#autocomplete_path'])) {
    drupal_add_library('system', 'drupal.autocomplete');
    \$element['#attributes']['class'][] = 'form-autocomplete';

    \$attributes = array();
    \$attributes['type'] = 'hidden';
    \$attributes['id'] = \$element['#attributes']['id'] . '-autocomplete';
    \$attributes['value'] = url(\$element['#autocomplete_path'], array('absolute' => TRUE));
    \$attributes['disabled'] = 'disabled';
    \$attributes['class'][] = 'autocomplete';
    \$extra = '<input' . drupal_attributes(\$attributes) . ' />';
  \}

  \$output = '<input' . drupal_attributes(\$element['#attributes']) . ' />';

  return \$output . \$extra;}
}

$2