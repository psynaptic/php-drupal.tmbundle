/**
 * Format a textarea.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: title, value, description, rows, cols, required, attributes
 * @return
 *   A themed HTML string representing the textarea.
 *
 * @ingroup themeable
 */
function <?php print $basename; ?>_textarea(\$element) {
  \$class = array('form-textarea');

  // Add teaser behavior (must come before resizable)
  if (!empty(\$element['#teaser'])) {
    drupal_add_js('misc/teaser.js');
    // Note: arrays are merged in drupal_get_js().
    drupal_add_js(array('teaserCheckbox' => array(\$element['#id'] => \$element['#teaser_checkbox'])), 'setting');
    drupal_add_js(array('teaser' => array(\$element['#id'] => \$element['#teaser'])), 'setting');
    \$class[] = 'teaser';
  }

  // Add resizable behavior
  if (\$element['#resizable'] !== FALSE) {
    drupal_add_js('misc/textarea.js');
    \$class[] = 'resizable';
  }

  _form_set_class(\$element, \$class);
  return theme('form_element', \$element, '<textarea cols="'. \$element['#cols'] .'" rows="'. \$element['#rows'] .'" name="'. \$element['#name'] .'" id="'. \$element['#id'] .'" '. drupal_attributes(\$element['#attributes']) .'>'. check_plain(\$element['#value']) .'</textarea>');
}

$1