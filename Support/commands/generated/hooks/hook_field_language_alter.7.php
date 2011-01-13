/**
 * Implements hook_field_language_alter().
 */
function <?php print $basename; ?>_field_language_alter(&\$display_language, \$context) {
  ${1:// Do not apply core language fallback rules if they are disabled or if Locale
  // is not registered as a translation handler.
  if (variable_get('locale_field_language_fallback', TRUE) && field_has_translation_handler(\$context['entity_type'], 'locale')) {
    locale_field_language_fallback(\$display_language, \$context['entity'], \$context['language']);
  \}}
}

$2