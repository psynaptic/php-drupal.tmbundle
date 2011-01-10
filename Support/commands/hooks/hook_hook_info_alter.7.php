/**
 * Implements hook_hook_info_alter().
 */
function <?php print $basename; ?>_hook_info_alter(&\$hooks) {
  ${1:// Our module wants to completely override the core tokens, so make
  // sure the core token hooks are not found.
  \$hooks['token_info']['group'] = 'mytokens';
  \$hooks['tokens']['group'] = 'mytokens';}
}

$2