/**
 * Implements hook_image_effect_info().
 */
function <?php print $basename; ?>_image_effect_info() {
  ${1:\$effects = array();

  \$effects['mymodule_resize'] = array(
    'label' => t('Resize'),
    'help' => t('Resize an image to an exact set of dimensions, ignoring aspect ratio.'),
    'effect callback' => 'mymodule_resize_image',
    'form callback' => 'mymodule_resize_form',
    'summary theme' => 'mymodule_resize_summary',
  );

  return \$effects;}
}

$2