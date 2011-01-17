/**
 * Generate the HTML output for a single menu link.
 *
 * @ingroup themeable
 */
function <?php print $basename; ?>_menu_item_link(\$link) {
  if (empty(\$link['localized_options'])) {
    \$link['localized_options'] = array();
  }

  return l(\$link['title'], \$link['href'], \$link['localized_options']);
}

$1