/**
 * Return a themed form element.
 *
 * @param element
 *   An associative array containing the properties of the element.
 *   Properties used: title, description, id, required
 * @param \$value
 *   The form element's data.
 * @return
 *   A string representing the form element.
 */
function ${1:phptemplate}_form_element(\$element, \$value) {
  \$output  = '<div class="form-item">'."\n";
  \$required = !empty(\$element['#required']) ? '<span class="form-required" title="'. t('This field is required.') .'">*</span>' : '';

  if (!empty(\$element['#title'])) {
    \$title = \$element['#title'];
    if (!empty(\$element['#id'])) {
      \$output .= ' <label for="'. \$element['#id'] .'">'. t('!title: !required', array('!title' => filter_xss_admin(\$title), '!required' => \$required)) ."</label>\n";
    }
    else {
      \$output .= ' <label>'. t('!title: !required', array('!title' => filter_xss_admin(\$title), '!required' => \$required)) ."</label>\n";
    }
  }

  \$output .= " \$value\n";

  if (!empty(\$element['#description'])) {
    \$output .= ' <div class="description">'. \$element['#description'] ."</div>\n";
  }

  \$output .= "</div>\n";

  return \$output;
}

$2