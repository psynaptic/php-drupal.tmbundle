/**
 * Implements hook_trigger_info_alter().
 */
function <?php print $basename; ?>_trigger_info_alter(&\$triggers) {
  ${1:\$triggers['node']['node_insert']['label'] = t('When content is saved');}
}

$2