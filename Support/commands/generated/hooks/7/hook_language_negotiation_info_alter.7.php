/**
 * Implements hook_language_negotiation_info_alter().
 */
function <?php print $basename; ?>_language_negotiation_info_alter(array &\$language_providers) {
  ${1:if (isset(\$language_providers['custom_language_provider'])) {
    \$language_providers['custom_language_provider']['config'] = 'admin/config/regional/language/configure/custom-language-provider';
  \}}
}

$2