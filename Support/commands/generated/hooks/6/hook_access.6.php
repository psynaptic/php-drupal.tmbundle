/**
 * Implements hook_access().
 */
function <?php print $basename; ?>_access(\$op, \$node, \$account) {
  ${1:if (\$op == 'create') {
    return user_access('create stories', \$account);
  \}

  if (\$op == 'update' || \$op == 'delete') {
    if (user_access('edit own stories', \$account) && (\$account->uid == \$node->uid)) {
      return TRUE;
    \}
  \}}
}

$2