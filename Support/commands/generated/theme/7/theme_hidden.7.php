/**
 * Implements theme_hidden().
 */
function <?php print $basename; ?>_hidden(\$variables) {
  ${1:\$element = \$variables['element'];
  \$element['#attributes']['type'] = 'hidden';
  element_set_attributes(\$element, array('name', 'value'));
  return '<input' . drupal_attributes(\$element['#attributes']) . " />\n";}
}

$2