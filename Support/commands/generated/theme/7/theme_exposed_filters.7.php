/**
 * Implements theme_exposed_filters().
 */
function <?php print $basename; ?>_exposed_filters(\$variables) {
  ${1:\$form = \$variables['form'];
  \$output = '';

  if (isset(\$form['current'])) {
    \$items = array();
    foreach (element_children(\$form['current']) as \$key) {
      \$items[] = drupal_render(\$form['current'][\$key]);
    \}
    \$output .= theme('item_list', array('items' => \$items, 'attributes' => array('class' => array('clearfix', 'current-filters'))));
  \}

  \$output .= drupal_render_children(\$form);

  return '<div class="exposed-filters">' . \$output . '</div>';}
}

$2