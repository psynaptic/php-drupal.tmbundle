/**
 * Implements hook_image_styles_alter().
 */
function <?php print $basename; ?>_image_styles_alter(&\$styles) {
  ${1:// Check that we only affect a default style.
  if (\$styles['thumbnail']['storage'] == IMAGE_STORAGE_DEFAULT) {
    // Add an additional effect to the thumbnail style.
    \$styles['thumbnail']['effects'][] = array(
      'name' => 'image_desaturate',
      'data' => array(),
      'weight' => 1,
      'effect callback' => 'image_desaturate_effect',
    );
  \}}
}

$2