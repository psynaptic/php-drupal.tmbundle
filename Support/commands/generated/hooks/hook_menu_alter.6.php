/**
 * Implements hook_menu_alter().
 */
function <?php print $basename; ?>_menu_alter(&\$items) {
  ${1:// Example - disable the page at node/add
  \$items['node/add']['access callback'] = FALSE;}
}

$2