/**
 * Implements hook_path_insert().
 */
function <?php print $basename; ?>_path_insert(\$path) {
  ${1:db_insert('mytable')
    ->fields(array(
      'alias' => \$path['alias'],
      'pid' => \$path['pid'],
    ))
    ->execute();}
}

$2