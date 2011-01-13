/**
 * Implements hook_delete().
 */
function <?php print $basename; ?>_delete(&\$node) {
  ${1:db_query('DELETE FROM {mytable\} WHERE nid = %d', \$node->nid);}
}

$2