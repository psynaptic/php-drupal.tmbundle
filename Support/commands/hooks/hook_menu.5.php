/**
 * Implementation of hook_menu().
 */
function <?php print $basename; ?>_menu(\$may_cache) {
  \$items = array();

  if (\$may_cache) {
    ${1:// Type '\$item ⇥' to create a default menu item here.}
  }${2:
  else {
    ${3:// Insert menu items specific to the current request here.}
  \}}
  return \$items;
}

$4