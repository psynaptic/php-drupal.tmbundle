/**
 * Implements theme_system_admin_index().
 */
function <?php print $basename; ?>_system_admin_index(\$variables) {
  ${1:\$menu_items = \$variables['menu_items'];

  \$stripe = 0;
  \$container = array('left' => '', 'right' => '');
  \$flip = array('left' => 'right', 'right' => 'left');
  \$position = 'left';

  // Iterate over all modules.
  foreach (\$menu_items as \$module => \$block) {
    list(\$description, \$items) = \$block;

    // Output links.
    if (count(\$items)) {
      \$block = array();
      \$block['title'] = \$module;
      \$block['content'] = theme('admin_block_content', array('content' => \$items));
      \$block['description'] = t(\$description);
      \$block['show'] = TRUE;

      if (\$block_output = theme('admin_block', array('block' => \$block))) {
        if (!isset(\$block['position'])) {
          // Perform automatic striping.
          \$block['position'] = \$position;
          \$position = \$flip[\$position];
        \}
        \$container[\$block['position']] .= \$block_output;
      \}
    \}
  \}

  \$output = '<div class="admin clearfix">';
  \$output .= theme('system_compact_link');
  foreach (\$container as \$id => \$data) {
    \$output .= '<div class="' . \$id . ' clearfix">';
    \$output .= \$data;
    \$output .= '</div>';
  \}
  \$output .= '</div>';

  return \$output;}
}

$2