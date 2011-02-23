/**
 * Implements theme_image_scale_summary().
 */
function <?php print $basename; ?>_image_scale_summary(\$variables) {
  ${1:\$data = \$variables['data'];
  return theme('image_resize_summary', array('data' => \$data)) . ' ' . (\$data['upscale'] ? '(' . t('upscaling allowed') . ')' : '');}
}

$2