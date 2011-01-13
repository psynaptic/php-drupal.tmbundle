/**
 * Implements hook_image_style_flush().
 */
function <?php print $basename; ?>_image_style_flush(\$style) {
  ${1:// Empty cached data that contains information about the style.
  cache_clear_all('*', 'cache_mymodule', TRUE);}
}

$2