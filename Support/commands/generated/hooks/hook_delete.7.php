/**
 * Implements hook_delete().
 */
function <?php print $basename; ?>_delete(\$node) {
  ${1:db_delete('mytable')
      ->condition('nid', $nid->nid)
      ->execute();}
}

$2