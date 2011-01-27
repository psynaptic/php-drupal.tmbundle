/**
 * Implements theme_filter_admin_format_filter_order().
 */
function <?php print $basename; ?>_filter_admin_format_filter_order(\$variables) {
  ${1:\$element = \$variables['element'];

  // Filter order (tabledrag).
  \$rows = array();
  foreach (element_children(\$element, TRUE) as \$name) {
    \$element[\$name]['weight']['#attributes']['class'][] = 'filter-order-weight';
    \$rows[] = array(
      'data' => array(
        drupal_render(\$element[\$name]['filter']),
        drupal_render(\$element[\$name]['weight']),
      ),
      'class' => array('draggable'),
    );
  \}
  \$output = drupal_render_children(\$element);
  \$output .= theme('table', array('rows' => \$rows, 'attributes' => array('id' => 'filter-order')));
  drupal_add_tabledrag('filter-order', 'order', 'sibling', 'filter-order-weight', NULL, NULL, TRUE);

  return \$output;}
}

$2