/**
 * Implements hook_exit().
 */
function <?php print $basename; ?>_exit(\$destination = NULL) {
  ${1:db_query('UPDATE {counter\} SET hits = hits + 1 WHERE type = 1');}
}

$2