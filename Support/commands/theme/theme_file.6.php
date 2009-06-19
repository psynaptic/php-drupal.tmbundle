/**
 * Format a file upload field.
 *
 * @param \$title
 *   The label for the file upload field.
 * @param \$name
 *   The internal name used to refer to the field.
 * @param \$size
 *   A measure of the visible size of the field (passed directly to HTML).
 * @param \$description
 *   Explanatory text to display after the form item.
 * @param \$required
 *   Whether the user must upload a file to the field.
 * @return
 *   A themed HTML string representing the field.
 *
 * @ingroup themeable
 *
 * For assistance with handling the uploaded file correctly, see the API
 * provided by file.inc.
 */
function ${1:phptemplate}_file(\$element) {
  _form_set_class(\$element, array('form-file'));
  return theme('form_element', \$element, '<input type="file" name="'. \$element['#name'] .'"'. (\$element['#attributes'] ? ' '. drupal_attributes(\$element['#attributes']) : '') .' id="'. \$element['#id'] .'" size="'. \$element['#size'] ."\" />\n");
}

$2