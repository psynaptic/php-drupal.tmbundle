/**
 * Implements theme_pager_previous().
 */
function <?php print $basename; ?>_pager_previous(\$variables) {
  ${1:\$text = \$variables['text'];
  \$element = \$variables['element'];
  \$interval = \$variables['interval'];
  \$parameters = \$variables['parameters'];
  global \$pager_page_array;
  \$output = '';

  // If we are anywhere but the first page
  if (\$pager_page_array[\$element] > 0) {
    \$page_new = pager_load_array(\$pager_page_array[\$element] - \$interval, \$element, \$pager_page_array);

    // If the previous page is the first page, mark the link as such.
    if (\$page_new[\$element] == 0) {
      \$output = theme('pager_first', array('text' => \$text, 'element' => \$element, 'parameters' => \$parameters));
    \}
    // The previous page is not the first page.
    else {
      \$output = theme('pager_link', array('text' => \$text, 'page_new' => \$page_new, 'element' => \$element, 'parameters' => \$parameters));
    \}
  \}

  return \$output;}
}

$2