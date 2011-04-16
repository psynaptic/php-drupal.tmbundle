/**
 * Implements theme_pager_previous().
 */
function <?php print $basename; ?>_pager_previous(\$text, \$limit, \$element = 0, \$interval = 1, \$parameters = array()) {
  ${1:global \$pager_page_array;
  \$output = '';

  // If we are anywhere but the first page
  if (\$pager_page_array[\$element] > 0) {
    \$page_new = pager_load_array(\$pager_page_array[\$element] - \$interval, \$element, \$pager_page_array);

    // If the previous page is the first page, mark the link as such.
    if (\$page_new[\$element] == 0) {
      \$output = theme('pager_first', \$text, \$limit, \$element, \$parameters);
    \}
    // The previous page is not the first page.
    else {
      \$output = theme('pager_link', \$text, \$page_new, \$element, \$parameters);
    \}
  \}

  return \$output;}
}

$2