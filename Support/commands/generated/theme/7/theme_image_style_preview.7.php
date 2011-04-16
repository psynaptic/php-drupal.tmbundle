/**
 * Implements theme_image_style_preview().
 */
function <?php print $basename; ?>_image_style_preview(\$variables) {
  ${1:\$style = \$variables['style'];

  \$sample_image = variable_get('image_style_preview_image', drupal_get_path('module', 'image') . '/sample.png');
  \$sample_width = 160;
  \$sample_height = 160;

  // Set up original file information.
  \$original_path = \$sample_image;
  \$original_image = image_get_info(\$original_path);
  if (\$original_image['width'] > \$original_image['height']) {
    \$original_width = min(\$original_image['width'], \$sample_width);
    \$original_height = round(\$original_width / \$original_image['width'] * \$original_image['height']);
  \}
  else {
    \$original_height = min(\$original_image['height'], \$sample_height);
    \$original_width = round(\$original_height / \$original_image['height'] * \$original_image['width']);
  \}
  \$original_attributes = array_intersect_key(\$original_image, array('width' => '', 'height' => ''));
  \$original_attributes['style'] = 'width: ' . \$original_width . 'px; height: ' . \$original_height . 'px;';

  // Set up preview file information.
  \$preview_file = image_style_path(\$style['name'], \$original_path);
  if (!file_exists(\$preview_file)) {
    image_style_create_derivative(\$style, \$original_path, \$preview_file);
  \}
  \$preview_image = image_get_info(\$preview_file);
  if (\$preview_image['width'] > \$preview_image['height']) {
    \$preview_width = min(\$preview_image['width'], \$sample_width);
    \$preview_height = round(\$preview_width / \$preview_image['width'] * \$preview_image['height']);
  \}
  else {
    \$preview_height = min(\$preview_image['height'], \$sample_height);
    \$preview_width = round(\$preview_height / \$preview_image['height'] * \$preview_image['width']);
  \}
  \$preview_attributes = array_intersect_key(\$preview_image, array('width' => '', 'height' => ''));
  \$preview_attributes['style'] = 'width: ' . \$preview_width . 'px; height: ' . \$preview_height . 'px;';

  // In the previews, timestamps are added to prevent caching of images.
  \$output = '<div class="image-style-preview preview clearfix">';

  // Build the preview of the original image.
  \$original_url = file_create_url(\$original_path);
  \$output .= '<div class="preview-image-wrapper">';
  \$output .= t('original') . ' (' . l(t('view actual size'), \$original_url) . ')';
  \$output .= '<div class="preview-image original-image" style="' . \$original_attributes['style'] . '">';
  \$output .= '<a href="' . \$original_url . '">' . theme('image', array('path' => \$original_path, 'alt' => t('Sample original image'), 'title' => '', 'attributes' => \$original_attributes)) . '</a>';
  \$output .= '<div class="height" style="height: ' . \$original_height . 'px"><span>' . \$original_image['height'] . 'px</span></div>';
  \$output .= '<div class="width" style="width: ' . \$original_width . 'px"><span>' . \$original_image['width'] . 'px</span></div>';
  \$output .= '</div>'; // End preview-image.
  \$output .= '</div>'; // End preview-image-wrapper.

  // Build the preview of the image style.
  \$preview_url = file_create_url(\$preview_file) . '?cache_bypass=' . REQUEST_TIME;
  \$output .= '<div class="preview-image-wrapper">';
  \$output .= check_plain(\$style['name']) . ' (' . l(t('view actual size'), file_create_url(\$preview_file) . '?' . time()) . ')';
  \$output .= '<div class="preview-image modified-image" style="' . \$preview_attributes['style'] . '">';
  \$output .= '<a href="' . file_create_url(\$preview_file) . '?' . time() . '">' . theme('image', array('path' => \$preview_url, 'alt' => t('Sample modified image'), 'title' => '', 'attributes' => \$preview_attributes)) . '</a>';
  \$output .= '<div class="height" style="height: ' . \$preview_height . 'px"><span>' . \$preview_image['height'] . 'px</span></div>';
  \$output .= '<div class="width" style="width: ' . \$preview_width . 'px"><span>' . \$preview_image['width'] . 'px</span></div>';
  \$output .= '</div>'; // End preview-image.
  \$output .= '</div>'; // End preview-image-wrapper.

  \$output .= '</div>'; // End image-style-preview.

  return \$output;}
}

$2