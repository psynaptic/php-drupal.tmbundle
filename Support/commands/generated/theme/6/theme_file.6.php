/**
 * Implements theme_file().
 */
function <?php print $basename; ?>_file(\$element) {
  ${1:_form_set_class(\$element, array('form-file'));
  return theme('form_element', \$element, '<input type="file" name="'. \$element['#name'] .'"'. (\$element['#attributes'] ? ' '. drupal_attributes(\$element['#attributes']) : '') .' id="'. \$element['#id'] .'" size="'. \$element['#size'] ."\" />\n");}
}

$2