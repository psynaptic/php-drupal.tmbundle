/**
 * Implements hook_delete().
 */
function ${1:<?php print $basename; ?>}_delete(&\$node) {
  ${2:db_query('DELETE FROM \{mytable\} WHERE nid = %d', \$node->nid);}
}

$3  