/**
 * Implements hook_node_delete().
 */
function <?php print $basename; ?>_node_delete(\$node) {
  ${1:db_delete('mytable')
    ->condition('nid', \$node->nid)
    ->execute();}
}

$2