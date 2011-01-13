/**
 * Implements hook_language_switch_links_alter().
 */
function <?php print $basename; ?>_language_switch_links_alter(array &\$links, \$type, \$path) {
  ${1:global \$language;

  if (\$type == LANGUAGE_TYPE_CONTENT && isset(\$links[\$language->language])) {
    foreach (\$links[\$language->language] as \$link) {
      \$link['attributes']['class'][] = 'active-language';
    \}
  \}}
}

$2