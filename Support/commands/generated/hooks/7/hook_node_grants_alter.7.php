/**
 * Implements hook_node_grants_alter().
 */
function <?php print $basename; ?>_node_grants_alter(&\$grants, \$account, \$op) {
  ${1:// Our sample module never allows certain roles to edit or delete
  // content. Since some other node access modules might allow this
  // permission, we expressly remove it by returning an empty \$grants
  // array for roles specified in our variable setting.

  // Get our list of banned roles.
  \$restricted = variable_get('example_restricted_roles', array());

  if (\$op != 'view' && !empty(\$restricted)) {
    // Now check the roles for this account against the restrictions.
    foreach (\$restricted as \$role_id) {
      if (isset(\$user->roles[\$role_id])) {
        \$grants = array();
      \}
    \}
  \}}
}

$2