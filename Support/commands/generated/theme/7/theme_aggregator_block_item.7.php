/**
 * Implements theme_aggregator_block_item().
 */
function <?php print $basename; ?>_aggregator_block_item(\$variables) {
  ${1:// Display the external link to the item.
  return '<a href="' . check_url(\$variables['item']->link) . '">' . check_plain(\$variables['item']->title) . "</a>\n";}
}

$2