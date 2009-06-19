/**
 * Implementation of hook_action_info_alter().
 */
function <?php print $basename; ?>_action_info_alter(&\$actions) {
  \$actions['${1:<?php print $basename; ?>${2:_action}}']['description'] = t('${3:Unpublish and remove from public view.}');
}

$4