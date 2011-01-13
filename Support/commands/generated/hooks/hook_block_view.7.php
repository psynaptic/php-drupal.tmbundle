/**
 * Implements hook_block_view().
 */
function <?php print $basename; ?>_block_view(\$delta = '') {
  \$block = array();

  switch (\$delta) {
    case '$1':
      \$block['subject'] = t('$2');
      \$block['content'] = $3;
      break;
  }
  return \$block;
}

$4