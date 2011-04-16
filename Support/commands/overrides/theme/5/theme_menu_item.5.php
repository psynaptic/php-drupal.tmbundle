/**
 * Generate the HTML output for a single menu item.
 *
 * @param \$mid
 *   The menu id of the item.
 * @param \$children
 *   A string containing any rendered child items of this menu.
 * @param \$leaf
 *   A boolean indicating whether this menu item is a leaf.
 *
 * @ingroup themeable
 */
function <?php print $basename; ?>_menu_item(\$mid, \$children = '', \$leaf = TRUE) {
  return '<li class="'. (\$leaf ? 'leaf' : (\$children ? 'expanded' : 'collapsed')) .'">'. menu_item_link(\$mid) . \$children ."</li>\n";
}

$1