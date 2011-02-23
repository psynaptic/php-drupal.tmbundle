/**
 * Implements theme_pager_first().
 */
function <?php print $basename; ?>_pager_first(\$variables) {
  ${1:\$text = \$variables['text'];
  \$element = \$variables['element'];
  \$parameters = \$variables['parameters'];
  global \$pager_page_array;
  \$output = '';

  // If we are anywhere but the first page
  if (\$pager_page_array[\$element] > 0) {
    \$output = theme('pager_link', array('text' => \$text, 'page_new' => pager_load_array(0, \$element, \$pager_page_array), 'element' => \$element, 'parameters' => \$parameters));
  \}

  return \$output;}
}

$2