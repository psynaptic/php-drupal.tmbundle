/**
 * Implements hook_exit().
 */
function <?php print $basename; ?>_exit(\$destination = NULL) {
  ${1:db_update('counter')
    ->expression('hits', 'hits + 1')
    ->condition('type', 1)
    ->execute();}
}

$2