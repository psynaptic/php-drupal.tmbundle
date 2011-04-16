/**
 * Implements hook_aggregator_parse().
 */
function <?php print $basename; ?>_aggregator_parse(\$feed) {
  ${1:if (\$items = mymodule_parse(\$feed->source_string)) {
    \$feed->items = \$items;
    return TRUE;
  \}
  return FALSE;}
}

$2