/**
 * Implements hook_search_page().
 */
function <?php print $basename; ?>_search_page(\$results) {
  ${1:\$output['prefix']['#markup'] = '<ol class="search-results">';

  foreach (\$results as \$entry) {
    \$output[] = array(
      '#theme' => 'search_result',
      '#result' => \$entry,
      '#module' => 'my_module_name',
    );
  \}
  \$output['suffix']['#markup'] = '</ol>' . theme('pager');

  return \$output;}
}

$2