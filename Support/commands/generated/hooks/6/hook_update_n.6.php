/**
 * Implements hook_update_N().
 */
function <?php print $basename; ?>_update_N(&\$sandbox) {
  ${1:// For non-multipass updates, the signature can simply be;
  // function hook_update_N() {

  // For most updates, the following is sufficient.
  \$ret = array();
  db_add_field(\$ret, 'mytable1', 'newcol', array('type' => 'int', 'not null' => TRUE));
  return \$ret;

  // However, for more complex operations that may take a long time,
  // you may hook into Batch API as in the following example.
  \$ret = array();

  // Update 3 users at a time to have an exclamation point after their names.
  // (They're really happy that we can do batch API in this hook!)
  if (!isset(\$sandbox['progress'])) {
    \$sandbox['progress'] = 0;
    \$sandbox['current_uid'] = 0;
    // We'll -1 to disregard the uid 0...
    \$sandbox['max'] = db_result(db_query('SELECT COUNT(DISTINCT uid) FROM {users\}')) - 1;
  \}

  \$users = db_query_range("SELECT uid, name FROM {users\} WHERE uid > %d ORDER BY uid ASC", \$sandbox['current_uid'], 0, 3);
  while (\$user = db_fetch_object(\$users)) {
    \$user->name .= '!';
    \$ret[] = update_sql("UPDATE {users\} SET name = '\$user->name' WHERE uid = \$user->uid");

    \$sandbox['progress']++;
    \$sandbox['current_uid'] = \$user->uid;
  \}

  \$ret['#finished'] = empty(\$sandbox['max']) ? 1 : (\$sandbox['progress'] / \$sandbox['max']);

  return \$ret;}
}

$2