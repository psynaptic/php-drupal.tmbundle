/**
 * Return a themed list of items.
 *
 * @param \$items
 *   An array of items to be displayed in the list. If an item is a string,
 *   then it is used as is. If an item is an array, then the "data" element of
 *   the array is used as the contents of the list item. If an item is an array
 *   with a "children" element, those children are displayed in a nested list.
 *   All other elements are treated as attributes of the list item element.
 * @param \$title
 *   The title of the list.
 * @param \$attributes
 *   The attributes applied to the list element.
 * @param \$type
 *   The type of list to return (e.g. "ul", "ol")
 * @return
 *   A string containing the list output.
 */
function <?php print $basename; ?>_item_list(\$items = array(), \$title = NULL, \$type = 'ul', \$attributes = NULL) {
  \$output = '<div class="item-list">';
  if (isset(\$title)) {
    \$output .= '<h3>'. \$title .'</h3>';
  }

  if (!empty(\$items)) {
    \$output .= "<\$type" . drupal_attributes(\$attributes) . '>';
    foreach (\$items as \$item) {
      \$attributes = array();
      \$children = array();
      if (is_array(\$item)) {
        foreach (\$item as \$key => \$value) {
          if (\$key == 'data') {
            \$data = \$value;
          }
          elseif (\$key == 'children') {
            \$children = \$value;
          }
          else {
            \$attributes[\$key] = \$value;
          }
        }
      }
      else {
        \$data = \$item;
      }
      if (count(\$children) > 0) {
        \$data .= theme_item_list(\$children, NULL, \$type, \$attributes); // Render nested list
      }
      \$output .= '<li' . drupal_attributes(\$attributes) . '>'. \$data .'</li>';
    }
    \$output .= "</\$type>";
  }
  \$output .= '</div>';
  return \$output;
}

$1