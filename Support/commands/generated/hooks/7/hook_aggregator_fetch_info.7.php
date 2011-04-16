/**
 * Implements hook_aggregator_fetch_info().
 */
function <?php print $basename; ?>_aggregator_fetch_info() {
  ${1:return array(
    'title' => t('Default fetcher'),
    'description' => t('Default fetcher for resources available by URL.'),
  );}
}

$2