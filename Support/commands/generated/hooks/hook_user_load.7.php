/**
 * Implements hook_user_load().
 */
function <?php print $basename; ?>_user_load(\$users) {
  ${1:\$result = db_query('SELECT * FROM {my_table\} WHERE uid IN (:uids)', array(':uids' => array_keys(\$users)));
  foreach (\$result as \$record) {
    \$users[\$record->uid]->foo = \$result->foo;
  \}}
}

$2