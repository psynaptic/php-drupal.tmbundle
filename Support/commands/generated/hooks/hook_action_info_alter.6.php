/**
 * Implements hook_action_info_alter().
 */
function <?php print $basename; ?>_action_info_alter(&\$actions) {
  ${1:\$actions['node_unpublish_action']['description'] = t('Unpublish and remove from public view.');}
}

$2