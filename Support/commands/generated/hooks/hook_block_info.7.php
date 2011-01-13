/**
 * Implements hook_block_info().
 */
function <?php print $basename; ?>_block_info() {
  \$blocks['$1'] = array(
    'info' => t('$2'), 
    'cache' => DRUPAL_NO_CACHE,
  );
  return \$blocks;
}

$3