/**
 * Implements hook_field_prepare_view().
 */
function <?php print $basename; ?>_field_prepare_view(\$entity_type, \$entities, \$field, \$instances, \$langcode, &\$items) {
  ${1:// Sample code from image.module: if there are no images specified at all,
  // use the default image.
  foreach (\$entities as \$id => \$entity) {
    if (empty(\$items[\$id]) && \$field['settings']['default_image']) {
      if (\$file = file_load(\$field['settings']['default_image'])) {
        \$items[\$id][0] = (array) \$file + array(
          'is_default' => TRUE,
          'alt' => '',
          'title' => '',
        );
      \}
    \}
  \}}
}

$2