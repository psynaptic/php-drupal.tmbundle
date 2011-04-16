/**
 * Implements hook_page_alter().
 */
function <?php print $basename; ?>_page_alter(&\$page) {
  ${1:// Add help text to the user login block.
  \$page['sidebar_first']['user_login']['help'] = array(
    '#weight' => -10,
    '#markup' => t('To post comments or add new content, you first have to log in.'),
  );}
}

$2