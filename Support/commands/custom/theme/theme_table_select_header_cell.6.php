/**
 * Returns a header cell for tables that have a select all functionality.
 */
function ${1:phptemplate}_table_select_header_cell() {
  drupal_add_js('misc/tableselect.js');

  return array('class' => 'select-all');
}

$2