/**
 * Implements theme_admin_block_content().
 */
function <?php print $basename; ?>_admin_block_content(\$variables) {
  ${1:\$content = \$variables['content'];
  \$output = '';

  if (!empty(\$content)) {
    \$class = 'admin-list';
    if (\$compact = system_admin_compact_mode()) {
      \$class .= ' compact';
    \}
    \$output .= '<dl class="' . \$class . '">';
    foreach (\$content as \$item) {
      \$output .= '<dt>' . l(\$item['title'], \$item['href'], \$item['localized_options']) . '</dt>';
      if (!\$compact && isset(\$item['description'])) {
        \$output .= '<dd>' . filter_xss_admin(\$item['description']) . '</dd>';
      \}
    \}
    \$output .= '</dl>';
  \}
  return \$output;}
}

$2