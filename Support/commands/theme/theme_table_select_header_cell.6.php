/**
 * Returns a header cell for tables that have a select all functionality.
 */
function <?php print $basename; ?>_table_select_header_cell() {
  drupal_add_js('misc/tableselect.js');

  return array('class' => 'select-all');
}

$1