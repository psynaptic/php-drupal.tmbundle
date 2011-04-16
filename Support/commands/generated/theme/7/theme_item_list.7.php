/**
 * Implements theme_item_list().
 */
function <?php print $basename; ?>_item_list(\$variables) {
  ${1:\$items = \$variables['items'];
  \$title = \$variables['title'];
  \$type = \$variables['type'];
  \$attributes = \$variables['attributes'];

  \$output = '<div class="item-list">';
  if (isset(\$title)) {
    \$output .= '<h3>' . \$title . '</h3>';
  \}

  if (!empty(\$items)) {
    \$output .= "<\$type" . drupal_attributes(\$attributes) . '>';
    \$num_items = count(\$items);
    foreach (\$items as \$i => \$item) {
      \$attributes = array();
      \$children = array();
      if (is_array(\$item)) {
        foreach (\$item as \$key => \$value) {
          if (\$key == 'data') {
            \$data = \$value;
          \}
          elseif (\$key == 'children') {
            \$children = \$value;
          \}
          else {
            \$attributes[\$key] = \$value;
          \}
        \}
      \}
      else {
        \$data = \$item;
      \}
      if (count(\$children) > 0) {
        // Render nested list.
        \$data .= theme_item_list(array('items' => \$children, 'title' => NULL, 'type' => \$type, 'attributes' => \$attributes));
      \}
      if (\$i == 0) {
        \$attributes['class'][] = 'first';
      \}
      if (\$i == \$num_items - 1) {
        \$attributes['class'][] = 'last';
      \}
      \$output .= '<li' . drupal_attributes(\$attributes) . '>' . \$data . "</li>\n";
    \}
    \$output .= "</\$type>";
  \}
  \$output .= '</div>';
  return \$output;}
}

$2