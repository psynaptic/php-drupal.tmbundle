/**
 * Implements theme_table().
 */
function <?php print $basename; ?>_table(\$variables) {
  ${1:\$header = \$variables['header'];
  \$rows = \$variables['rows'];
  \$attributes = \$variables['attributes'];
  \$caption = \$variables['caption'];
  \$colgroups = \$variables['colgroups'];
  \$sticky = \$variables['sticky'];
  \$empty = \$variables['empty'];

  // Add sticky headers, if applicable.
  if (count(\$header) && \$sticky) {
    drupal_add_js('misc/tableheader.js');
    // Add 'sticky-enabled' class to the table to identify it for JS.
    // This is needed to target tables constructed by this function.
    \$attributes['class'][] = 'sticky-enabled';
  \}

  \$output = '<table' . drupal_attributes(\$attributes) . ">\n";

  if (isset(\$caption)) {
    \$output .= '<caption>' . \$caption . "</caption>\n";
  \}

  // Format the table columns:
  if (count(\$colgroups)) {
    foreach (\$colgroups as \$number => \$colgroup) {
      \$attributes = array();

      // Check if we're dealing with a simple or complex column
      if (isset(\$colgroup['data'])) {
        foreach (\$colgroup as \$key => \$value) {
          if (\$key == 'data') {
            \$cols = \$value;
          \}
          else {
            \$attributes[\$key] = \$value;
          \}
        \}
      \}
      else {
        \$cols = \$colgroup;
      \}

      // Build colgroup
      if (is_array(\$cols) && count(\$cols)) {
        \$output .= ' <colgroup' . drupal_attributes(\$attributes) . '>';
        \$i = 0;
        foreach (\$cols as \$col) {
          \$output .= ' <col' . drupal_attributes(\$col) . ' />';
        \}
        \$output .= " </colgroup>\n";
      \}
      else {
        \$output .= ' <colgroup' . drupal_attributes(\$attributes) . " />\n";
      \}
    \}
  \}

  // Add the 'empty' row message if available.
  if (!count(\$rows) && \$empty) {
    \$header_count = 0;
    foreach (\$header as \$header_cell) {
      if (is_array(\$header_cell)) {
        \$header_count += isset(\$header_cell['colspan']) ? \$header_cell['colspan'] : 1;
      \}
      else {
        \$header_count++;
      \}
    \}
    \$rows[] = array(array('data' => \$empty, 'colspan' => \$header_count, 'class' => array('empty', 'message')));
  \}

  // Format the table header:
  if (count(\$header)) {
    \$ts = tablesort_init(\$header);
    // HTML requires that the thead tag has tr tags in it followed by tbody
    // tags. Using ternary operator to check and see if we have any rows.
    \$output .= (count(\$rows) ? ' <thead><tr>' : ' <tr>');
    foreach (\$header as \$cell) {
      \$cell = tablesort_header(\$cell, \$header, \$ts);
      \$output .= _theme_table_cell(\$cell, TRUE);
    \}
    // Using ternary operator to close the tags based on whether or not there are rows
    \$output .= (count(\$rows) ? " </tr></thead>\n" : "</tr>\n");
  \}
  else {
    \$ts = array();
  \}

  // Format the table rows:
  if (count(\$rows)) {
    \$output .= "<tbody>\n";
    \$flip = array('even' => 'odd', 'odd' => 'even');
    \$class = 'even';
    foreach (\$rows as \$number => \$row) {
      \$attributes = array();

      // Check if we're dealing with a simple or complex row
      if (isset(\$row['data'])) {
        foreach (\$row as \$key => \$value) {
          if (\$key == 'data') {
            \$cells = \$value;
          \}
          else {
            \$attributes[\$key] = \$value;
          \}
        \}
      \}
      else {
        \$cells = \$row;
      \}
      if (count(\$cells)) {
        // Add odd/even class
        if (empty(\$row['no_striping'])) {
          \$class = \$flip[\$class];
          \$attributes['class'][] = \$class;
        \}

        // Build row
        \$output .= ' <tr' . drupal_attributes(\$attributes) . '>';
        \$i = 0;
        foreach (\$cells as \$cell) {
          \$cell = tablesort_cell(\$cell, \$header, \$ts, \$i++);
          \$output .= _theme_table_cell(\$cell);
        \}
        \$output .= " </tr>\n";
      \}
    \}
    \$output .= "</tbody>\n";
  \}

  \$output .= "</table>\n";
  return \$output;}
}

$2