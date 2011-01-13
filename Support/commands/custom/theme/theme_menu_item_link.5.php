/**
 * Generate the HTML representing a given menu item ID.
 *
 * @param \$item
 *   The menu item to render.
 * @param \$link_item
 *   The menu item which should be used to find the correct path.
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_menu_item_link(\$item, \$link_item) {
  return l(\$item['title'], \$link_item['path'], !empty(\$item['description']) ? array('title' => \$item['description']) : array(), isset(\$item['query']) ? \$item['query'] : NULL);
}

$2