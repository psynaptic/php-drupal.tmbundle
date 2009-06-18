/**
 * Returns a header cell for tables that have a select all functionality.
 */
function ${1:phptemplate}_table_select_header_cell() {
  drupal_add_js(array('tableSelect' => array('selectAll' => t('Select all rows in this table'), 'selectNone' => t('Deselect all rows in this table'))), 'setting');
  drupal_add_js('misc/tableselect.js');

  return array('class' => 'select-all');
}

$2