/**
 * Implements theme_password().
 */
function <?php print $basename; ?>_password(\$element) {
  ${1:\$size = \$element['#size'] ? ' size="'. \$element['#size'] .'" ' : '';
  \$maxlength = \$element['#maxlength'] ? ' maxlength="'. \$element['#maxlength'] .'" ' : '';

  _form_set_class(\$element, array('form-text'));
  \$output = '<input type="password" name="'. \$element['#name'] .'" id="'. \$element['#id'] .'" '. \$maxlength . \$size . drupal_attributes(\$element['#attributes']) .' />';
  return theme('form_element', \$element, \$output);}
}

$2