/**
 * Implements hook_query_alter().
 */
function <?php print $basename; ?>_query_alter(QueryAlterableInterface \$query) {
  ${1:if (\$query->hasTag('micro_limit')) {
    \$query->range(0, 2);
  \}}
}

$2