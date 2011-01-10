/**
 * Implements hook_html_head_alter().
 */
function <?php print $basename; ?>_html_head_alter(&\$head_elements) {
  ${1:foreach (\$head_elements as \$key => \$element) {
    if (isset(\$element['#attributes']['rel']) && \$element['#attributes']['rel'] == 'canonical') {
      // I want a custom canonical url.
      \$head_elements[\$key]['#attributes']['href'] = mymodule_canonical_url();
    \}
  \}}
}

$2