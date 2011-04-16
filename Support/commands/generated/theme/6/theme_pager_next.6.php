/**
 * Implements theme_pager_next().
 */
function <?php print $basename; ?>_pager_next(\$text, \$limit, \$element = 0, \$interval = 1, \$parameters = array()) {
  ${1:global \$pager_page_array, \$pager_total;
  \$output = '';

  // If we are anywhere but the last page
  if (\$pager_page_array[\$element] < (\$pager_total[\$element] - 1)) {
    \$page_new = pager_load_array(\$pager_page_array[\$element] + \$interval, \$element, \$pager_page_array);
    // If the next page is the last page, mark the link as such.
    if (\$page_new[\$element] == (\$pager_total[\$element] - 1)) {
      \$output = theme('pager_last', \$text, \$limit, \$element, \$parameters);
    \}
    // The next page is not the last page.
    else {
      \$output = theme('pager_link', \$text, \$page_new, \$element, \$parameters);
    \}
  \}

  return \$output;}
}

$2