/**
 * Implements theme_image().
 */
function <?php print $basename; ?>_image(\$path, \$alt = '', \$title = '', \$attributes = NULL, \$getsize = TRUE) {
  ${1:if (!\$getsize || (is_file(\$path) && (list(\$width, \$height, \$type, \$image_attributes) = @getimagesize(\$path)))) {
    \$attributes = drupal_attributes(\$attributes);
    \$url = (url(\$path) == \$path) ? \$path : (base_path() . \$path);
    return '<img src="'. check_url(\$url) .'" alt="'. check_plain(\$alt) .'" title="'. check_plain(\$title) .'" '. (isset(\$image_attributes) ? \$image_attributes : '') . \$attributes .' />';
  \}}
}

$2