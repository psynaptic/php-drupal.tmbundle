/**
 * Implements theme_file().
 */
function <?php print $basename; ?>_file(\$variables) {
  ${1:\$element = \$variables['element'];
  \$element['#attributes']['type'] = 'file';
  element_set_attributes(\$element, array('id', 'name', 'size'));
  _form_set_class(\$element, array('form-file'));

  return '<input' . drupal_attributes(\$element['#attributes']) . ' />';}
}

$2