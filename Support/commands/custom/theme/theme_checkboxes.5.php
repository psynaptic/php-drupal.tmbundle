/**
 * Format a set of checkboxes.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 * @return
 *   A themed HTML string representing the checkbox set.
 */
function <?php print $basename; ?>_checkboxes(\$element) {
  \$class = 'form-checkboxes';
  if (isset(\$element['#attributes']['class'])) {
    \$class .= ' '. \$element['#attributes']['class'];
  }
  \$element['#children'] = '<div class="'. \$class .'">'. \$element['#children'] .'</div>';
  if (\$element['#title'] || \$element['#description']) {
    unset(\$element['#id']);
    return theme('form_element', \$element, \$element['#children']);
  }
  else {
    return \$element['#children'];
  }
}

$1