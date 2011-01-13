/**
 * Implements hook_block_info_alter().
 */
function <?php print $basename; ?>_block_info_alter(&\$blocks, \$theme, \$code_blocks) {
  ${1:// Disable the login block.
  \$blocks['user']['login']['status'] = 0;}
}

$2