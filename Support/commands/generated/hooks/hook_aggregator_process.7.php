/**
 * Implements hook_aggregator_process().
 */
function <?php print $basename; ?>_aggregator_process(\$feed) {
  ${1:foreach (\$feed->items as \$item) {
    mymodule_save(\$item);
  \}}
}

$2