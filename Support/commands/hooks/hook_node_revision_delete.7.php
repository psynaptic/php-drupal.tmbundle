/**
 * Implements hook_node_revision_delete().
 */
function <?php print $basename; ?>_node_revision_delete(\$node) {
  ${1:db_delete('mytable')
    ->condition('vid', \$node->vid)
    ->execute();}
}

$2