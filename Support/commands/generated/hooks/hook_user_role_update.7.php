/**
 * Implements hook_user_role_update().
 */
function <?php print $basename; ?>_user_role_update(\$role) {
  ${1:// Save extra fields provided by the module to user roles.
  db_merge('my_module_table')
    ->key(array('rid' => \$role->rid))
    ->fields(array(
      'role_description' => \$role->description
    ))
    ->execute();}
}

$2