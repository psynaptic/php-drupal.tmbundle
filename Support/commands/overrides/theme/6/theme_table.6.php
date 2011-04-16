/**
 * Return a themed table.
 *
 * @param \$header
 *   An array containing the table headers. Each element of the array can be
 *   either a localized string or an associative array with the following keys:
 *   - "data": The localized title of the table column.
 *   - "field": The database field represented in the table column (required if
 *     user is to be able to sort on this column).
 *   - "sort": A default sort order for this column ("asc" or "desc").
 *   - Any HTML attributes, such as "colspan", to apply to the column header cell.
 * @param \$rows
 *   An array of table rows. Every row is an array of cells, or an associative
 *   array with the following keys:
 *   - "data": an array of cells
 *   - Any HTML attributes, such as "class", to apply to the table row.
 *
 *   Each cell can be either a string or an associative array with the following keys:
 *   - "data": The string to display in the table cell.
 *   - "header": Indicates this cell is a header.
 *   - Any HTML attributes, such as "colspan", to apply to the table cell.
 *
 *   Here's an example for \$rows:
 *   @verbatim
 *   \$rows = array(
 *     // Simple row
 *     array(
 *       'Cell 1', 'Cell 2', 'Cell 3'
 *     ),
 *     // Row with attributes on the row and some of its cells.
 *     array(
 *       'data' => array('Cell 1', array('data' => 'Cell 2', 'colspan' => 2)), 'class' => 'funky'
 *     )
 *   );
 *   @endverbatim
 *
 * @param \$attributes
 *   An array of HTML attributes to apply to the table tag.
 * @param \$caption
 *   A localized string to use for the <caption> tag.
 * @return
 *   An HTML string representing the table.
 */
function <?php print $basename; ?>_table(\$header, \$rows, \$attributes = array(), \$caption = NULL) {

  // Add sticky headers, if applicable.
  if (count(\$header)) {
    drupal_add_js('misc/tableheader.js');
    // Add 'sticky-enabled' class to the table to identify it for JS.
    // This is needed to target tables constructed by this function.
    \$attributes['class'] = empty(\$attributes['class']) ? 'sticky-enabled' : (\$attributes['class'] .' sticky-enabled');
  }

  \$output = '<table'. drupal_attributes(\$attributes) .">\n";

  if (isset(\$caption)) {
    \$output .= '<caption>'. \$caption ."</caption>\n";
  }

  // Format the table header:
  if (count(\$header)) {
    \$ts = tablesort_init(\$header);
    // HTML requires that the thead tag has tr tags in it follwed by tbody
    // tags. Using ternary operator to check and see if we have any rows.
    \$output .= (count(\$rows) ? ' <thead><tr>' : ' <tr>');
    foreach (\$header as \$cell) {
      \$cell = tablesort_header(\$cell, \$header, \$ts);
      \$output .= _theme_table_cell(\$cell, TRUE);
    }
    // Using ternary operator to close the tags based on whether or not there are rows
    \$output .= (count(\$rows) ? " </tr></thead>\n" : "</tr>\n");
  }
  else {
    \$ts = array();
  }

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
          }
          else {
            \$attributes[\$key] = \$value;
          }
        }
      }
      else {
        \$cells = \$row;
      }
      if (count(\$cells)) {
        // Add odd/even class
        \$class = \$flip[\$class];
        if (isset(\$attributes['class'])) {
          \$attributes['class'] .= ' '. \$class;
        }
        else {
          \$attributes['class'] = \$class;
        }

        // Build row
        \$output .= ' <tr'. drupal_attributes(\$attributes) .'>';
        \$i = 0;
        foreach (\$cells as \$cell) {
          \$cell = tablesort_cell(\$cell, \$header, \$ts, \$i++);
          \$output .= _theme_table_cell(\$cell);
        }
        \$output .= " </tr>\n";
      }
    }
    \$output .= "</tbody>\n";
  }

  \$output .= "</table>\n";
  return \$output;
}

$1