/**
 * Implements hook_aggregator_fetch().
 */
function <?php print $basename; ?>_aggregator_fetch(\$feed) {
  ${1:\$feed->source_string = mymodule_fetch(\$feed->url);}
}

$2