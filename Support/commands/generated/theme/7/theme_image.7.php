/**
 * Implements theme_image().
 */
function <?php print $basename; ?>_image(\$variables) {
  ${1:\$attributes = \$variables['attributes'];
  \$attributes['src'] = file_create_url(\$variables['path']);

  foreach (array('width', 'height', 'alt', 'title') as \$key) {

    if (isset(\$variables[\$key])) {
      \$attributes[\$key] = \$variables[\$key];
    \}
  \}

  return '<img' . drupal_attributes(\$attributes) . ' />';}
}

$2