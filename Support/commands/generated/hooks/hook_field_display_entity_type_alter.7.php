/**
 * Implements hook_field_display_ENTITY_TYPE_alter().
 */
function <?php print $basename; ?>_field_display_ENTITY_TYPE_alter(&\$display, \$context) {
  ${1:// Leave field labels out of the search index.
  if (\$context['view_mode'] == 'search_index') {
    \$display['label'] = 'hidden';
  \}}
}

$2