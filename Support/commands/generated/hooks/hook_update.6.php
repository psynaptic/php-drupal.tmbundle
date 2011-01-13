/**
 * Implements hook_update().
 */
function <?php print $basename; ?>_update(\$node) {
  ${1:db_query("UPDATE {mytable\} SET extra = '%s' WHERE nid = %d",
    \$node->extra, \$node->nid);}
}

$2