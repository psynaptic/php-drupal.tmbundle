/**
 * Implements hook_update().
 */
function <?php print $basename; ?>_update(\$node) {
  ${1:db_update('mytable')
    ->fields(array('extra' => \$node->extra))
    ->condition('nid', \$node->nid)
    ->execute();}
}

$2