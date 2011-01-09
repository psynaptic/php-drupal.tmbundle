/**
 * Implements hook_user_categories().
 */
function <?php print $basename; ?>_user_categories() {
  return array(
    array(
      ${1:'name' => 'account', 
      'title' => t('Account settings'), 
      'weight' => 1,}
    ),
  );
}

$2