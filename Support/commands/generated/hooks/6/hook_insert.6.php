/**
 * Implements hook_insert().
 */
function <?php print $basename; ?>_insert(\$node) {
  ${1:db_query("INSERT INTO {mytable\} (nid, extra)
    VALUES (%d, '%s')", \$node->nid, \$node->extra);}
}

$2