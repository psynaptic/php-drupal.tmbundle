/**
 * Implements theme_textfield().
 */
function <?php print $basename; ?>_textfield(\$element) {
  ${1:\$size = empty(\$element['#size']) ? '' : ' size="'. \$element['#size'] .'"';
  \$maxlength = empty(\$element['#maxlength']) ? '' : ' maxlength="'. \$element['#maxlength'] .'"';
  \$class = array('form-text');
  \$extra = '';
  \$output = '';

  if (\$element['#autocomplete_path'] && menu_valid_path(array('link_path' => \$element['#autocomplete_path']))) {
    drupal_add_js('misc/autocomplete.js');
    \$class[] = 'form-autocomplete';
    \$extra =  '<input class="autocomplete" type="hidden" id="'. \$element['#id'] .'-autocomplete" value="'. check_url(url(\$element['#autocomplete_path'], array('absolute' => TRUE))) .'" disabled="disabled" />';
  \}
  _form_set_class(\$element, \$class);

  if (isset(\$element['#field_prefix'])) {
    \$output .= '<span class="field-prefix">'. \$element['#field_prefix'] .'</span> ';
  \}

  \$output .= '<input type="text"'. \$maxlength .' name="'. \$element['#name'] .'" id="'. \$element['#id'] .'"'. \$size .' value="'. check_plain(\$element['#value']) .'"'. drupal_attributes(\$element['#attributes']) .' />';

  if (isset(\$element['#field_suffix'])) {
    \$output .= ' <span class="field-suffix">'. \$element['#field_suffix'] .'</span>';
  \}

  return theme('form_element', \$element, \$output) . \$extra;}
}

$2