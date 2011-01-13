/**
 * Implements hook_link_alter().
 */
function <?php print $basename; ?>_link_alter(&\$links, \$node, \$comment = NULL) {
  ${1:foreach (\$links as \$module => \$link) {
    if (strstr(\$module, 'taxonomy_term')) {
      // Link back to the forum and not the taxonomy term page
      \$links[\$module]['href'] = str_replace('taxonomy/term', 'forum', \$link['href']);
    \}
  \}}
}

$2