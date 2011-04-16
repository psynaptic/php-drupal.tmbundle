//**
 * Format a date selection element.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: title, value, options, description, required and attributes.
 * @return
 *   A themed HTML string representing the date selection boxes.
 */
function <?php print $basename; ?>_date(\$element) {
  return theme('form_element', \$element, '<div class="container-inline">'. \$element['#children'] .'</div>');
}

$1