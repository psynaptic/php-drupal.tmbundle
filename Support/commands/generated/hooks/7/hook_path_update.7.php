/**
 * Implements hook_path_update().
 */
function <?php print $basename; ?>_path_update(\$path) {
  ${1:db_update('mytable')
    ->fields(array('alias' => \$path['alias']))
    ->condition('pid', \$path['pid'])
    ->execute();}
}

$2