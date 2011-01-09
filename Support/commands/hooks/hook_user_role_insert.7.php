/**
 * Implements hook_user_role_insert().
 */
function <?php print $basename; ?>_user_role_insert(\$role) {
  ${1:// Save extra fields provided by the module to user roles.
  db_insert('my_module_table')
    ->fields(array(
    'rid' => \$role->rid, 
    'role_description' => \$role->description,
  ))
    ->execute();}
}

$2