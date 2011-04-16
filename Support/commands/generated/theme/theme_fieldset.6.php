/**
 * Implements theme_fieldset().
 */
function <?php print $basename; ?>_fieldset(\$element) {
  ${1:if (!empty(\$element['#collapsible'])) {
    drupal_add_js('misc/collapse.js');

    if (!isset(\$element['#attributes']['class'])) {
      \$element['#attributes']['class'] = '';
    \}

    \$element['#attributes']['class'] .= ' collapsible';
    if (!empty(\$element['#collapsed'])) {
      \$element['#attributes']['class'] .= ' collapsed';
    \}
  \}

  return '<fieldset'. drupal_attributes(\$element['#attributes']) .'>'. (\$element['#title'] ? '<legend>'. \$element['#title'] .'</legend>' : '') . (isset(\$element['#description']) && \$element['#description'] ? '<div class="description">'. \$element['#description'] .'</div>' : '') . (!empty(\$element['#children']) ? \$element['#children'] : '') . (isset(\$element['#value']) ? \$element['#value'] : '') ."</fieldset>\n";}
}

$2