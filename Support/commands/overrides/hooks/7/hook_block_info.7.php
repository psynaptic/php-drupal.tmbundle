/**
 * Implements hook_block_info().
 */
function <?php print $basename; ?>_block_info() {
  ${1:// This example comes from node.module.
  \$blocks['syndicate'] = array(
    'info' => t('Syndicate'),
    'cache' => DRUPAL_NO_CACHE
  );

  \$blocks['recent'] = array(
    'info' => t('Recent content'),
    // DRUPAL_CACHE_PER_ROLE will be assumed.
  );

  return \$blocks;}
}

$2