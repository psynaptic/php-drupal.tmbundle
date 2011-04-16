/**
 * Implements hook_menu_link_alter().
 */
function <?php print $basename; ?>_menu_link_alter(&\$item, \$menu) {
  ${1:// Example 1 - make all new admin links hidden (a.k.a disabled).
  if (strpos(\$item['link_path'], 'admin') === 0 && empty(\$item['mlid'])) {
    \$item['hidden'] = 1;
  \}
  // Example 2  - flag a link to be altered by hook_translated_menu_link_alter()
  if (\$item['link_path'] == 'devel/cache/clear') {
    \$item['options']['alter'] = TRUE;
  \}}
}

$2