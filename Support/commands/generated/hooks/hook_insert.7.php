/**
 * Implements hook_insert().
 */
function <?php print $basename; ?>_insert(\$node) {
  ${1:db_insert('mytable')
    ->fields(array(
      'nid' => \$node->nid,
      'extra' => \$node->extra,
    ))
    ->execute();}
}

$2