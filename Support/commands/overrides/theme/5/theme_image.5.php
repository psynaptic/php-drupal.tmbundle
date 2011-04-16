/**
 * Return a themed image.
 *
 * @param \$path
 *   Either the path of the image file (relative to base_path()) or a full URL.
 * @param \$alt
 *   The alternative text for text-based browsers.
 * @param \$title
 *   The title text is displayed when the image is hovered in some popular browsers.
 * @param \$attributes
 *   Associative array of attributes to be placed in the img tag.
 * @param \$getsize
 *   If set to TRUE, the image's dimension are fetched and added as width/height attributes.
 * @return
 *   A string containing the image tag.
 */
function <?php print $basename; ?>_image(\$path, \$alt = '', \$title = '', \$attributes = NULL, \$getsize = TRUE) {
  if (!\$getsize || (is_file(\$path) && (list(\$width, \$height, \$type, \$image_attributes) = @getimagesize(\$path)))) {
    \$attributes = drupal_attributes(\$attributes);
    \$url = (url(\$path) == \$path) ? \$path : (base_path() . \$path);
    return '<img src="'. check_url(\$url) .'" alt="'. check_plain(\$alt) .'" title="'. check_plain(\$title) .'" '. \$image_attributes . \$attributes .' />';
  }
}

$1