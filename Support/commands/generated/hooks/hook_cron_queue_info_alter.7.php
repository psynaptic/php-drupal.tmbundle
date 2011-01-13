/**
 * Implements hook_cron_queue_info_alter().
 */
function <?php print $basename; ?>_cron_queue_info_alter(&\$queues) {
  ${1:// This site has many feeds so let's spend 90 seconds on each cron run
  // updating feeds instead of the default 60.
  \$queues['aggregator_feeds']['time'] = 90;}
}

$2