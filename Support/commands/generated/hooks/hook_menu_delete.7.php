/**
 * Implements hook_menu_delete().
 */
function <?php print $basename; ?>_menu_delete(\$menu) {
  ${1:// Delete the record from our variable.
  \$my_menus = variable_get('my_module_menus', array());
  unset(\$my_menus[\$menu['menu_name']]);
  variable_set('my_module_menus', \$my_menus);}
}

$2