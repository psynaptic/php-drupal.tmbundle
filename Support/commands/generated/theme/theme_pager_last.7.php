/**
 * Implements theme_pager_last().
 */
function <?php print $basename; ?>_pager_last(\$variables) {
  ${1:\$text = \$variables['text'];
  \$element = \$variables['element'];
  \$parameters = \$variables['parameters'];
  global \$pager_page_array, \$pager_total;
  \$output = '';

  // If we are anywhere but the last page
  if (\$pager_page_array[\$element] < (\$pager_total[\$element] - 1)) {
    \$output = theme('pager_link', array('text' => \$text, 'page_new' => pager_load_array(\$pager_total[\$element] - 1, \$element, \$pager_page_array), 'element' => \$element, 'parameters' => \$parameters));
  \}

  return \$output;}
}

$2