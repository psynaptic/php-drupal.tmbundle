/**
 * Implements hook_menu_link_update().
 */
function <?php print $basename; ?>_menu_link_update(\$link) {
  ${1:// If the parent menu has changed, update our record.
  \$menu_name = db_result(db_query("SELECT mlid, menu_name, status FROM {menu_example\} WHERE mlid = :mlid", array(':mlid' => \$link['mlid'])));
  if (\$menu_name != \$link['menu_name']) {
    db_update('menu_example')
      ->fields(array('menu_name' => \$link['menu_name']))
      ->condition('mlid', \$link['mlid'])
      ->execute();
  \}}
}

$2