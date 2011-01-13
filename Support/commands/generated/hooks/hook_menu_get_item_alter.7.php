/**
 * Implements hook_menu_get_item_alter().
 */
function <?php print $basename; ?>_menu_get_item_alter(&\$router_item, \$path, \$original_map) {
  ${1:// When retrieving the router item for the current path...
  if (\$path == \$_GET['q']) {
    // ...call a function that prepares something for this request.
    mymodule_prepare_something();
  \}}
}

$2