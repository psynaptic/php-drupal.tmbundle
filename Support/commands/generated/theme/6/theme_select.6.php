/**
 * Implements theme_select().
 */
function <?php print $basename; ?>_select(\$element) {
  ${1:\$select = '';
  \$size = \$element['#size'] ? ' size="'. \$element['#size'] .'"' : '';
  _form_set_class(\$element, array('form-select'));
  \$multiple = \$element['#multiple'];
  return theme('form_element', \$element, '<select name="'. \$element['#name'] .''. (\$multiple ? '[]' : '') .'"'. (\$multiple ? ' multiple="multiple" ' : '') . drupal_attributes(\$element['#attributes']) .' id="'. \$element['#id'] .'" '. \$size .'>'. form_select_options(\$element) .'</select>');}
}

$2