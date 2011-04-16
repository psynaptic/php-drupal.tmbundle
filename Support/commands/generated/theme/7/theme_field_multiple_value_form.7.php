/**
 * Implements theme_field_multiple_value_form().
 */
function <?php print $basename; ?>_field_multiple_value_form(\$variables) {
  ${1:\$element = \$variables['element'];
  \$output = '';

  if (\$element['#cardinality'] > 1 || \$element['#cardinality'] == FIELD_CARDINALITY_UNLIMITED) {
    \$table_id = drupal_html_id(\$element['#field_name'] . '_values');
    \$order_class = \$element['#field_name'] . '-delta-order';
    \$required = !empty(\$element['#required']) ? '<span class="form-required" title="' . t('This field is required. ') . '">*</span>' : '';

    \$header = array(
      array(
        'data' => '<label>' . t('!title: !required', array('!title' => \$element['#title'], '!required' => \$required)) . "</label>",
        'colspan' => 2,
        'class' => array('field-label'),
      ),
      t('Order'),
    );
    \$rows = array();

    // Sort items according to '_weight' (needed when the form comes back after
    // preview or failed validation)
    \$items = array();
    foreach (element_children(\$element) as \$key) {
      if (\$key === 'add_more') {
        \$add_more_button = &\$element[\$key];
      \}
      else {
        \$items[] = &\$element[\$key];
      \}
    \}
    usort(\$items, '_field_sort_items_value_helper');

    // Add the items as table rows.
    foreach (\$items as \$key => \$item) {
      \$item['_weight']['#attributes']['class'] = array(\$order_class);
      \$delta_element = drupal_render(\$item['_weight']);
      \$cells = array(
        array('data' => '', 'class' => array('field-multiple-drag')),
        drupal_render(\$item),
        array('data' => \$delta_element, 'class' => array('delta-order')),
      );
      \$rows[] = array(
        'data' => \$cells,
        'class' => array('draggable'),
      );
    \}

    \$output = '<div class="form-item">';
    \$output .= theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => \$table_id, 'class' => array('field-multiple-table'))));
    \$output .= \$element['#description'] ? '<div class="description">' . \$element['#description'] . '</div>' : '';
    \$output .= '<div class="clearfix">' . drupal_render(\$add_more_button) . '</div>';
    \$output .= '</div>';

    drupal_add_tabledrag(\$table_id, 'order', 'sibling', \$order_class);
  \}
  else {
    foreach (element_children(\$element) as \$key) {
      \$output .= drupal_render(\$element[\$key]);
    \}
  \}

  return \$output;}
}

$2