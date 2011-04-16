/**
 * Implements hook_path_delete().
 */
function <?php print $basename; ?>_path_delete(\$path) {
  ${1:db_delete('mytable')
    ->condition('pid', \$path['pid'])
    ->execute();}
}

$2