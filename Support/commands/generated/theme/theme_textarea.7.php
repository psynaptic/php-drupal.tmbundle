/**
 * Implements theme_textarea().
 */
function <?php print $basename; ?>_textarea(\$variables) {
  ${1:\$element = \$variables['element'];
  element_set_attributes(\$element, array('id', 'name', 'cols', 'rows'));
  _form_set_class(\$element, array('form-textarea'));

  \$wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty(\$element['#resizable'])) {
    drupal_add_library('system', 'drupal.textarea');
    \$wrapper_attributes['class'][] = 'resizable';
  \}

  \$output = '<div' . drupal_attributes(\$wrapper_attributes) . '>';
  \$output .= '<textarea' . drupal_attributes(\$element['#attributes']) . '>' . check_plain(\$element['#value']) . '</textarea>';
  \$output .= '</div>';
  return \$output;}
}

$2