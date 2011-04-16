/**
 * Implements hook_node_operations().
 */
function <?php print $basename; ?>_node_operations() {
  ${1:\$operations = array(
    'approve' => array(
      'label' => t('Approve the selected posts'),
      'callback' => 'node_operations_approve',
    ),
    'promote' => array(
      'label' => t('Promote the selected posts'),
      'callback' => 'node_operations_promote',
    ),
    'sticky' => array(
      'label' => t('Make the selected posts sticky'),
      'callback' => 'node_operations_sticky',
    ),
    'demote' => array(
      'label' => t('Demote the selected posts'),
      'callback' => 'node_operations_demote',
    ),
    'unpublish' => array(
      'label' => t('Unpublish the selected posts'),
      'callback' => 'node_operations_unpublish',
    ),
    'delete' => array(
      'label' => t('Delete the selected posts'),
    ),
  );
  return \$operations;}
}

$2