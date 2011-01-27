/**
 * Implements theme_field_ui_table().
 */
function <?php print $basename; ?>_field_ui_table(\$variables) {
  ${1:\$elements = \$variables['elements'];
  \$table = array();
  \$js_settings = array();

  // Add table headers and attributes.
  foreach (array('header', 'attributes') as \$key) {
    if (isset(\$elements["#\$key"])) {
      \$table[\$key] = \$elements["#\$key"];
    \}
  \}

  // Determine the colspan to use for region rows, by checking the number of
  // columns in the headers.
  \$colums_count = 0;
  foreach (\$table['header'] as \$header) {
    \$colums_count += (is_array(\$header) && isset(\$header['colspan']) ? \$header['colspan'] : 1);
  \}

  // Render rows, region by region.
  foreach (\$elements['#regions'] as \$region_name => \$region) {
    \$region_name_class = drupal_html_class(\$region_name);

    // Add region rows.
    if (isset(\$region['title'])) {
      \$table['rows'][] = array(
        'class' => array('region-title', 'region-' . \$region_name_class . '-title'),
        'no_striping' => TRUE,
        'data' => array(
          array('data' => \$region['title'], 'colspan' => \$colums_count),
        ),
      );
    \}
    if (isset(\$region['message'])) {
      \$class = (empty(\$region['rows_order']) ? 'region-empty' : 'region-populated');
      \$table['rows'][] = array(
        'class' => array('region-message', 'region-' . \$region_name_class . '-message', \$class),
        'no_striping' => TRUE,
        'data' => array(
          array('data' => \$region['message'], 'colspan' => \$colums_count),
        ),
      );
    \}

    // Add form rows, in the order determined at pre-render time.
    foreach (\$region['rows_order'] as \$name) {
      \$element = \$elements[\$name];

      \$row = array('data' => array());
      if (isset(\$element['#attributes'])) {
        \$row += \$element['#attributes'];
      \}

      foreach (element_children(\$element) as \$cell_key) {
        \$cell = array('data' => drupal_render(\$element[\$cell_key]));
        if (isset(\$element[\$cell_key]['#cell_attributes'])) {
          \$cell += \$element[\$cell_key]['#cell_attributes'];
        \}
        \$row['data'][] = \$cell;
      \}
      \$table['rows'][] = \$row;
    \}
  \}

  return theme('table', \$table);}
}

$2