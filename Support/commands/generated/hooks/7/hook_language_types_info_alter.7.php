/**
 * Implements hook_language_types_info_alter().
 */
function <?php print $basename; ?>_language_types_info_alter(array &\$language_types) {
  ${1:if (isset(\$language_types['custom_language_type'])) {
    \$language_types['custom_language_type_custom']['description'] = t('A far better description.');
  \}}
}

$2