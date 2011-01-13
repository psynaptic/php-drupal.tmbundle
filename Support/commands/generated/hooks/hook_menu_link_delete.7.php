/**
 * Implements hook_menu_link_delete().
 */
function <?php print $basename; ?>_menu_link_delete(\$link) {
  ${1:// Delete the record from our table.
  db_delete('menu_example')
    ->condition('mlid', \$link['mlid'])
    ->execute();}
}

$2