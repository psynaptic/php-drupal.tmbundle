/**
 * Implements theme_select().
 */
function <?php print $basename; ?>_select(\$variables) {
  ${1:\$element = \$variables['element'];
  element_set_attributes(\$element, array('id', 'name', 'size'));
  _form_set_class(\$element, array('form-select'));

  return '<select' . drupal_attributes(\$element['#attributes']) . '>' . form_select_options(\$element) . '</select>';}
}

$2