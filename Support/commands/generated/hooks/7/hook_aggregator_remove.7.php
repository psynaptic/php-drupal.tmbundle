/**
 * Implements hook_aggregator_remove().
 */
function <?php print $basename; ?>_aggregator_remove(\$feed) {
  ${1:mymodule_remove_items(\$feed->fid);}
}

$2