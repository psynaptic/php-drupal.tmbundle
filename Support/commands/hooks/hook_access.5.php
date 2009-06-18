/**
 * Implementation of hook_access().
 */
function hook_access(\$op, \$node) {
  global \$user;

  if (\$op == 'create') {
    return user_access('create stories');
  }

  if (\$op == 'update' || \$op == 'delete') {
    if (user_access('edit own stories') && (\$user->uid == \$node->uid)) {
      return TRUE;
    }
  }
}