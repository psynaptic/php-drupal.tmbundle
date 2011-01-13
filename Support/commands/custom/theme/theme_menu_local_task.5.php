/**
 * Generate the HTML representing a given menu item ID as a tab.
 *
 * @param \$mid
 *   The menu ID to render.
 * @param \$active
 *   Whether this tab or a subtab is the active menu item.
 * @param \$primary
 *   Whether this tab is a primary tab or a subtab.
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_menu_local_task(\$mid, \$active, \$primary) {
  if (\$active) {
    return '<li class="active">'. menu_item_link(\$mid) ."</li>\n";
  }
  else {
    return '<li>'. menu_item_link(\$mid) ."</li>\n";
  }
}

$2