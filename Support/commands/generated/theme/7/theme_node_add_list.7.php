/**
 * Implements theme_node_add_list().
 */
function <?php print $basename; ?>_node_add_list(\$variables) {
  ${1:\$content = \$variables['content'];
  \$output = '';

  if (\$content) {
    \$output = '<dl class="node-type-list">';
    foreach (\$content as \$item) {
      \$output .= '<dt>' . l(\$item['title'], \$item['href'], \$item['localized_options']) . '</dt>';
      \$output .= '<dd>' . filter_xss_admin(\$item['description']) . '</dd>';
    \}
    \$output .= '</dl>';
  \}
  else {
    \$output = '<p>' . t('You have not created any content types yet. Go to the <a href="@create-content">content type creation page</a> to add a new content type.', array('@create-content' => url('admin/structure/types/add'))) . '</p>';
  \}
  return \$output;}
}

$2