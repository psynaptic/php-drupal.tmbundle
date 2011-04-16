/**
 * Implements theme_radios().
 */
function <?php print $basename; ?>_radios(\$element) {
  ${1:\$class = 'form-radios';
  if (isset(\$element['#attributes']['class'])) {
    \$class .= ' '. \$element['#attributes']['class'];
  \}
  \$element['#children'] = '<div class="'. \$class .'">'. (!empty(\$element['#children']) ? \$element['#children'] : '') .'</div>';
  if (\$element['#title'] || \$element['#description']) {
    unset(\$element['#id']);
    return theme('form_element', \$element, \$element['#children']);
  \}
  else {
    return \$element['#children'];
  \}}
}

$2