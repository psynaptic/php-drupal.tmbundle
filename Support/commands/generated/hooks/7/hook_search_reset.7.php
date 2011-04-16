/**
 * Implements hook_search_reset().
 */
function <?php print $basename; ?>_search_reset() {
  ${1:db_update('search_dataset')
    ->fields(array('reindex' => REQUEST_TIME))
    ->condition('type', 'node')
    ->execute();}
}

$2