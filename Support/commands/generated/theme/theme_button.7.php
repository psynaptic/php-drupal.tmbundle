/**
 * Implements theme_button().
 */
function <?php print $basename; ?>_button(\$variables) {
  ${1:\$element = \$variables['element'];
  \$element['#attributes']['type'] = 'submit';
  element_set_attributes(\$element, array('id', 'name', 'value'));

  \$element['#attributes']['class'][] = 'form-' . \$element['#button_type'];
  if (!empty(\$element['#attributes']['disabled'])) {
    \$element['#attributes']['class'][] = 'form-button-disabled';
  \}

  return '<input' . drupal_attributes(\$element['#attributes']) . ' />';}
}

$2