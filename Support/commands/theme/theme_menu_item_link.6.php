/**
 * Generate the HTML output for a single menu link.
 *
 * @ingroup themeable
 */
function ${1:phptemplate}_menu_item_link(\$link) {
  if (empty(\$link['localized_options'])) {
    \$link['localized_options'] = array();
  }

  return l(\$link['title'], \$link['href'], \$link['localized_options']);
}

$2