/**
 * Implements hook_aggregator_parse_info().
 */
function <?php print $basename; ?>_aggregator_parse_info() {
  ${1:return array(
    'title' => t('Default parser'),
    'description' => t('Default parser for RSS, Atom and RDF feeds.'),
  );}
}

$2