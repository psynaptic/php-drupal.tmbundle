/**
 * Implements hook_field_extra_fields_alter().
 */
function <?php print $basename; ?>_field_extra_fields_alter(&\$info) {
  ${1:// Force node title to always be at the top of the list by default.
  foreach (node_type_get_types() as \$bundle) {
    if (isset(\$info['node'][\$bundle]['title'])) {
      \$info['node'][\$bundle]['title']['weight'] = -20;
    \}
  \}}
}

$2