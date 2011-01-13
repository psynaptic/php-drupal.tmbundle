/**
 * Implements hook_aggregator_process_info().
 */
function <?php print $basename; ?>_aggregator_process_info(\$feed) {
  ${1:return array(
    'title' => t('Default processor'),
    'description' => t('Creates lightweight records of feed items.'),
  );}
}

$2