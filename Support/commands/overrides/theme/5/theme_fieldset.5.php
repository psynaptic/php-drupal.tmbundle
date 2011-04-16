/**
 * Format a group of form items.
 *
 * @param \$element
 *   An associative array containing the properties of the element.
 *   Properties used: attributes, title, value, description, children, collapsible, collapsed
 * @return
 *   A themed HTML string representing the form item group.
 */
function <?php print $basename; ?>_fieldset(\$element) {
  if (\$element['#collapsible']) {
    drupal_add_js('misc/collapse.js');

    if (!isset(\$element['#attributes']['class'])) {
      \$element['#attributes']['class'] = '';
    }

    \$element['#attributes']['class'] .= ' collapsible';
    if (\$element['#collapsed']) {
     \$element['#attributes']['class'] .= ' collapsed';
    }
  }

  return '<fieldset' . drupal_attributes(\$element['#attributes']) .'>' . (\$element['#title'] ? '<legend>'. \$element['#title'] .'</legend>' : '') . (\$element['#description'] ? '<div class="description">'. \$element['#description'] .'</div>' : '') . \$element['#children'] . \$element['#value'] . "</fieldset>\n";
}

$1