/**
 * Format a group of form items.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: attributes, title, value, description, children, collapsible, collapsed
 * @return
 *   A themed HTML string representing the form item group.
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_fieldset(\$element) {
  if (!empty(\$element['#collapsible'])) {
    drupal_add_js('misc/collapse.js');

    if (!isset(\$element['#attributes']['class'])) {
      \$element['#attributes']['class'] = '';
    }

    \$element['#attributes']['class'] .= ' collapsible';
    if (!empty(\$element['#collapsed'])) {
      \$element['#attributes']['class'] .= ' collapsed';
    }
  }

  return '<fieldset'. drupal_attributes(\$element['#attributes']) .'>'. (\$element['#title'] ? '<legend>'. \$element['#title'] .'</legend>' : '') . (isset(\$element['#description']) && \$element['#description'] ? '<div class="description">'. \$element['#description'] .'</div>' : '') . (!empty(\$element['#children']) ? \$element['#children'] : '') . (isset(\$element['#value']) ? \$element['#value'] : '') ."</fieldset>\n";
}

$2