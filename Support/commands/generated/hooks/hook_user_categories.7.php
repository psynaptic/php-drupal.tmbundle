/**
 * Implements hook_user_categories().
 */
function <?php print $basename; ?>_user_categories() {
  ${1:return array(array(
    'name' => 'account',
    'title' => t('Account settings'),
    'weight' => 1,
  ));}
}

$2