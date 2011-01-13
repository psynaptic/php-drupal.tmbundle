/**
 * Implements hook_user_operations().
 */
function <?php print $basename; ?>_user_operations() {
  ${1:\$operations = array(
    'unblock' => array(
      'label' => t('Unblock the selected users'),
      'callback' => 'user_user_operations_unblock',
    ),
    'block' => array(
      'label' => t('Block the selected users'),
      'callback' => 'user_user_operations_block',
    ),
    'delete' => array(
      'label' => t('Delete the selected users'),
    ),
  );
  return \$operations;}
}

$2