/**
 * Implements hook_image_effect_info_alter().
 */
function <?php print $basename; ?>_image_effect_info_alter(&\$effects) {
  ${1:// Override the Image module's crop effect with more options.
  \$effect['image_crop']['effect callback'] = 'mymodule_crop_effect';
  \$effect['image_crop']['form callback'] = 'mymodule_crop_form';}
}

$2