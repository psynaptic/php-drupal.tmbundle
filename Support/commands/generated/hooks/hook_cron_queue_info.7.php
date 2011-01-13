/**
 * Implements hook_cron_queue_info().
 */
function <?php print $basename; ?>_cron_queue_info() {
  ${1:\$queues['aggregator_feeds'] = array(
    'worker callback' => 'aggregator_refresh',
    'time' => 60,
  );
  return \$queues;}
}

$2