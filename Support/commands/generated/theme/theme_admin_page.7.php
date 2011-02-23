/**
 * Implements theme_admin_page().
 */
function <?php print $basename; ?>_admin_page(\$variables) {
  ${1:\$blocks = \$variables['blocks'];

  \$stripe = 0;
  \$container = array();

  foreach (\$blocks as \$block) {
    if (\$block_output = theme('admin_block', array('block' => \$block))) {
      if (empty(\$block['position'])) {
        // perform automatic striping.
        \$block['position'] = ++\$stripe % 2 ? 'left' : 'right';
      \}
      if (!isset(\$container[\$block['position']])) {
        \$container[\$block['position']] = '';
      \}
      \$container[\$block['position']] .= \$block_output;
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