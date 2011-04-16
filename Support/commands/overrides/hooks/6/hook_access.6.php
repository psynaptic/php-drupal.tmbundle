/**
 * $1
 */
function <?php print $basename; ?>_access(\$op, \$node, \$account) {
  if (\$op == 'create') {
    return user_access('create stories', \$account);
  }

  if (\$op == 'update' || \$op == 'delete') {
    if (user_access('edit own stories', \$account) && (\$account->uid == \$node->uid)) {
      return TRUE;
    }
  }
}