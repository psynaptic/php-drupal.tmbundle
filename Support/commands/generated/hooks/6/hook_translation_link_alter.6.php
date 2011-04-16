/**
 * Implements hook_translation_link_alter().
 */
function <?php print $basename; ?>_translation_link_alter(&\$links, \$path) {
  ${1:global \$language;

  if (isset(\$links[\$language])) {
    foreach (\$links[\$language] as \$link) {
      \$link['attributes']['class'] .= ' active-language';
    \}
  \}}
}

$2