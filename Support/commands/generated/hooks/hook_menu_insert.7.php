/**
 * Implements hook_menu_insert().
 */
function <?php print $basename; ?>_menu_insert(\$menu) {
  ${1:// For example, we track available menus in a variable.
  \$my_menus = variable_get('my_module_menus', array());
  \$my_menus[\$menu['menu_name']] = \$menu['menu_name'];
  variable_set('my_module_menus', \$my_menus);}
}

$2