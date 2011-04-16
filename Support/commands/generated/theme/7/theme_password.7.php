/**
 * Implements theme_password().
 */
function <?php print $basename; ?>_password(\$variables) {
  ${1:\$element = \$variables['element'];
  \$element['#attributes']['type'] = 'password';
  element_set_attributes(\$element, array('id', 'name', 'value', 'size', 'maxlength'));
  _form_set_class(\$element, array('form-text'));

  return '<input' . drupal_attributes(\$element['#attributes']) . ' />';}
}

$2