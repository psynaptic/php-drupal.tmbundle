/**
 * Implements theme_image_button().
 */
function <?php print $basename; ?>_image_button(\$variables) {
  ${1:\$element = \$variables['element'];
  \$element['#attributes']['type'] = 'image';
  element_set_attributes(\$element, array('id', 'name', 'value'));

  \$element['#attributes']['src'] = file_create_url(\$element['#src']);
  if (!empty(\$element['#title'])) {
    \$element['#attributes']['alt'] = \$element['#title'];
    \$element['#attributes']['title'] = \$element['#title'];
  \}

  \$element['#attributes']['class'][] = 'form-' . \$element['#button_type'];
  if (!empty(\$element['#attributes']['disabled'])) {
    \$element['#attributes']['class'][] = 'form-button-disabled';
  \}

  return '<input' . drupal_attributes(\$element['#attributes']) . ' />';}
}

$2