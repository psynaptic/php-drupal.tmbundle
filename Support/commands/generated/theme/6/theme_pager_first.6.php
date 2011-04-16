/**
 * Implements theme_pager_first().
 */
function <?php print $basename; ?>_pager_first(\$text, \$limit, \$element = 0, \$parameters = array()) {
  ${1:global \$pager_page_array;
  \$output = '';

  // If we are anywhere but the first page
  if (\$pager_page_array[\$element] > 0) {
    \$output = theme('pager_link', \$text, pager_load_array(0, \$element, \$pager_page_array), \$element, \$parameters);
  \}

  return \$output;}
}

$2