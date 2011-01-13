/**
 * Implements hook_image_style_delete().
 */
function <?php print $basename; ?>_image_style_delete(\$style) {
  ${1:// Administrators can choose an optional replacement style when deleting.
  // Update the modules style variable accordingly.
  if (isset(\$style['old_name']) && \$style['old_name'] == variable_get('mymodule_image_style', '')) {
    variable_set('mymodule_image_style', \$style['name']);
  \}}
}

$2