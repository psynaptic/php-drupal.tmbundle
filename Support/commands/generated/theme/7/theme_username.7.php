/**
 * Implements theme_username().
 */
function <?php print $basename; ?>_username(\$variables) {
  ${1:if (isset(\$variables['link_path'])) {
    // We have a link path, so we should generate a link using l().
    // Additional classes may be added as array elements like
    // \$variables['link_options']['attributes']['class'][] = 'myclass';
    \$output = l(\$variables['name'] . \$variables['extra'], \$variables['link_path'], \$variables['link_options']);
  \}
  else {
    // Modules may have added important attributes so they must be included
    // in the output. Additional classes may be added as array elements like
    // \$variables['attributes_array']['class'][] = 'myclass';
    \$output = '<span' . drupal_attributes(\$variables['attributes_array']) . '>' . \$variables['name'] . \$variables['extra'] . '</span>';
  \}
  return \$output;}
}

$2