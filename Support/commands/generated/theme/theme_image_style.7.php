/**
 * Implements theme_image_style().
 */
function <?php print $basename; ?>_image_style(\$variables) {
  ${1:\$style_name = \$variables['style_name'];
  \$path = \$variables['path'];

  // theme_image() can only honor the \$getsize parameter with local file paths.
  // The derivative image is not created until it has been requested so the file
  // may not yet exist, in this case we just fallback to the URL.
  \$style_path = image_style_path(\$style_name, \$path);
  if (!file_exists(\$style_path)) {
    \$style_path = image_style_url(\$style_name, \$path);
  \}
  \$variables['path'] = \$style_path;
  return theme('image', \$variables);}
}

$2