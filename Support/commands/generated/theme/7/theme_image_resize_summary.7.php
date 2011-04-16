/**
 * Implements theme_image_resize_summary().
 */
function <?php print $basename; ?>_image_resize_summary(\$variables) {
  ${1:\$data = \$variables['data'];

  if (\$data['width'] && \$data['height']) {
    return check_plain(\$data['width']) . 'x' . check_plain(\$data['height']);
  \}
  else {
    return (\$data['width']) ? t('width @width', array('@width' => \$data['width'])) : t('height @height', array('@height' => \$data['height']));
  \}}
}

$2