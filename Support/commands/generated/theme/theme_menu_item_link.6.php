/**
 * Implements theme_menu_item_link().
 */
function <?php print $basename; ?>_menu_item_link(\$link) {
  ${1:if (empty(\$link['localized_options'])) {
    \$link['localized_options'] = array();
  \}

  return l(\$link['title'], \$link['href'], \$link['localized_options']);}
}

$2