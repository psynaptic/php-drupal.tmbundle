/**
 * Implements theme_file_widget_multiple().
 */
function <?php print $basename; ?>_file_widget_multiple(\$variables) {
  ${1:\$element = \$variables['element'];

  // Special ID and classes for draggable tables.
  \$weight_class = \$element['#id'] . '-weight';
  \$table_id = \$element['#id'] . '-table';

  // Build up a table of applicable fields.
  \$headers = array();
  \$headers[] = t('File information');
  if (\$element['#display_field']) {
    \$headers[] = array(
      'data' => t('Display'),
      'class' => array('checkbox'),
    );
  \}
  \$headers[] = t('Weight');
  \$headers[] = t('Operations');

  // Get our list of widgets in order (needed when the form comes back after
  // preview or failed validation).
  \$widgets = array();
  foreach (element_children(\$element) as \$key) {
    \$widgets[] = &\$element[\$key];
  \}
  usort(\$widgets, '_field_sort_items_value_helper');

  \$rows = array();
  foreach (\$widgets as \$key => &\$widget) {
    // Save the uploading row for last.
    if (\$widget['#file'] == FALSE) {
      \$widget['#title'] = \$element['#file_upload_title'];
      \$widget['#description'] = \$element['#file_upload_description'];
      continue;
    \}

    // Delay rendering of the buttons, so that they can be rendered later in the
    // "operations" column.
    \$operations_elements = array();
    foreach (element_children(\$widget) as \$sub_key) {
      if (isset(\$widget[\$sub_key]['#type']) && \$widget[\$sub_key]['#type'] == 'submit') {
        hide(\$widget[\$sub_key]);
        \$operations_elements[] = &\$widget[\$sub_key];
      \}
    \}

    // Delay rendering of the "Display" option and the weight selector, so that
    // each can be rendered later in its own column.
    if (\$element['#display_field']) {
      hide(\$widget['display']);
    \}
    hide(\$widget['_weight']);

    // Render everything else together in a column, without the normal wrappers.
    \$widget['#theme_wrappers'] = array();
    \$information = drupal_render(\$widget);

    // Render the previously hidden elements, using render() instead of
    // drupal_render(), to undo the earlier hide().
    \$operations = '';
    foreach (\$operations_elements as \$operation_element) {
      \$operations .= render(\$operation_element);
    \}
    \$display = '';
    if (\$element['#display_field']) {
      unset(\$widget['display']['#title']);
      \$display = array(
        'data' => render(\$widget['display']),
        'class' => array('checkbox'),
      );
    \}
    \$widget['_weight']['#attributes']['class'] = array(\$weight_class);
    \$weight = render(\$widget['_weight']);

    // Arrange the row with all of the rendered columns.
    \$row = array();
    \$row[] = \$information;
    if (\$element['#display_field']) {
      \$row[] = \$display;
    \}
    \$row[] = \$weight;
    \$row[] = \$operations;
    \$rows[] = array(
      'data' => \$row,
      'class' => isset(\$widget['#attributes']['class']) ? array_merge(\$widget['#attributes']['class'], array('draggable')) : array('draggable'),
    );
  \}

  drupal_add_tabledrag(\$table_id, 'order', 'sibling', \$weight_class);

  \$output = '';
  \$output = empty(\$rows) ? '' : theme('table', array('header' => \$headers, 'rows' => \$rows, 'attributes' => array('id' => \$table_id)));
  \$output .= drupal_render_children(\$element);
  return \$output;}
}

$2