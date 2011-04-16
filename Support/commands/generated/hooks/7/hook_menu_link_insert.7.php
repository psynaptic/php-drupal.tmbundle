/**
 * Implements hook_menu_link_insert().
 */
function <?php print $basename; ?>_menu_link_insert(\$link) {
  ${1:// In our sample case, we track menu items as editing sections
  // of the site. These are stored in our table as 'disabled' items.
  \$record['mlid'] = \$link['mlid'];
  \$record['menu_name'] = \$link['menu_name'];
  \$record['status'] = 0;
  drupal_write_record('menu_example', \$record);}
}

$2