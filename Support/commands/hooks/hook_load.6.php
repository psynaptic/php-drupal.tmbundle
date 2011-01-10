/**
 * Implements hook_load().
 */
function <?php print $basename; ?>_load(&\$node) {
  ${1:return db_fetch_object(db_query('${2:SELECT ${3:*} FROM {${4:<?php print $basename; ?>}\} WHERE nid = %s$5}', ${6:\$node->nid}));}
}

$7