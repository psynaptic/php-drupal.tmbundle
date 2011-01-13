/**
 * Implements hook_db_rewrite_sql().
 */
function <?php print $basename; ?>_db_rewrite_sql(\$query, \$primary_table, \$primary_field, \$args) {
  ${1:switch (\$primary_field) {
    case 'nid':
      // this query deals with node objects
      \$return = array();
      if (\$primary_table != 'n') {
        \$return['join'] = "LEFT JOIN {node\} n ON \$primary_table.nid = n.nid";
      \}
      \$return['where'] = 'created >' . mktime(0, 0, 0, 1, 1, 2005);
      return \$return;
      break;
    case 'tid':
      // this query deals with taxonomy objects
      break;
    case 'vid':
      // this query deals with vocabulary objects
      break;
  \}}
}

$2