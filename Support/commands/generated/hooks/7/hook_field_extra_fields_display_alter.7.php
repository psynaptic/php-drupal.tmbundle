/**
 * Implements hook_field_extra_fields_display_alter().
 */
function <?php print $basename; ?>_field_extra_fields_display_alter(&\$displays, \$context) {
  ${1:if (\$context['entity_type'] == 'taxonomy_term' && \$context['view_mode'] == 'full') {
    \$displays['description']['visibility'] = FALSE;
  \}}
}

$2