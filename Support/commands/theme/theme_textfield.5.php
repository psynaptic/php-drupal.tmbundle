/**
 * Format a textfield.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used:  title, value, description, size, maxlength, required, attributes autocomplete_path
 * @return
 *   A themed HTML string representing the textfield.
 */
function ${1:phptemplate}_textfield(\$element) {
  \$size = \$element['#size'] ? ' size="' . \$element['#size'] . '"' : '';
  \$class = array('form-text');
  \$extra = '';
  \$output = '';

  if (\$element['#autocomplete_path']) {
    drupal_add_js('misc/autocomplete.js');
    \$class[] = 'form-autocomplete';
    \$extra =  '<input class="autocomplete" type="hidden" id="'. \$element['#id'] .'-autocomplete" value="'. check_url(url(\$element['#autocomplete_path'], NULL, NULL, TRUE)) .'" disabled="disabled" />';
  }
  _form_set_class(\$element, \$class);

  if (isset(\$element['#field_prefix'])) {
    \$output .= '<span class="field-prefix">'. \$element['#field_prefix'] .'</span> ';
  }

  \$output .= '<input type="text" maxlength="'. \$element['#maxlength'] .'" name="'. \$element['#name'] .'" id="'. \$element['#id'] .'" '. \$size .' value="'. check_plain(\$element['#value']) .'"'. drupal_attributes(\$element['#attributes']) .' />';

  if (isset(\$element['#field_suffix'])) {
    \$output .= ' <span class="field-suffix">'. \$element['#field_suffix'] .'</span>';
  }

  return theme('form_element', \$element, \$output). \$extra;
}

$2