/**
 * Implements hook_user_role_delete().
 */
function <?php print $basename; ?>_user_role_delete(\$role) {
  ${1:// Delete existing instances of the deleted role.
  db_delete('my_module_table')
    ->condition('rid', \$role->rid)
    ->execute();}
}

$2