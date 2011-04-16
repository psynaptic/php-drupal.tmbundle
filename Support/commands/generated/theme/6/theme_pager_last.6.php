/**
 * Implements theme_pager_last().
 */
function <?php print $basename; ?>_pager_last(\$text, \$limit, \$element = 0, \$parameters = array()) {
  ${1:global \$pager_page_array, \$pager_total;
  \$output = '';

  // If we are anywhere but the last page
  if (\$pager_page_array[\$element] < (\$pager_total[\$element] - 1)) {
    \$output = theme('pager_link', \$text, pager_load_array(\$pager_total[\$element] - 1, \$element, \$pager_page_array), \$element, \$parameters);
  \}

  return \$output;}
}

$2