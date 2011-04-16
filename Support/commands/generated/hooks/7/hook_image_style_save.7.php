/**
 * Implements hook_image_style_save().
 */
function <?php print $basename; ?>_image_style_save(\$style) {
  ${1:// If a module defines an image style and that style is renamed by the user
  // the module should update any references to that style.
  if (isset(\$style['old_name']) && \$style['old_name'] == variable_get('mymodule_image_style', '')) {
    variable_set('mymodule_image_style', \$style['name']);
  \}}
}

$2