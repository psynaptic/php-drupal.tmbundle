/**
 * Implements theme_image_formatter().
 */
function <?php print $basename; ?>_image_formatter(\$variables) {
  ${1:\$item = \$variables['item'];
  \$image = array(
    'path' => \$item['uri'],
    'alt' => \$item['alt'],
  );
  // Do not output an empty 'title' attribute.
  if (drupal_strlen(\$item['title']) > 0) {
    \$image['title'] = \$item['title'];
  \}

  if (\$variables['image_style']) {
    \$image['style_name'] = \$variables['image_style'];
    \$output = theme('image_style', \$image);
  \}
  else {
    \$output = theme('image', \$image);
  \}

  if (\$variables['path']) {
    \$path = \$variables['path']['path'];
    \$options = \$variables['path']['options'];
    // When displaying an image inside a link, the html option must be TRUE.
    \$options['html'] = TRUE;
    \$output = l(\$output, \$path, \$options);
  \}

  return \$output;}
}

$2