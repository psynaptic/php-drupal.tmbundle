/**
 * Implements hook_load().
 */
function <?php print $basename; ?>_load(\$nodes) {
  ${1:\$result = db_query('SELECT nid, foo FROM {mytable\} WHERE nid IN (:nids)', array(':nids' => array_keys(\$nodes)));
  foreach (\$result as \$record) {
    \$nodes[\$record->nid]->foo = \$record->foo;
  \}}
}

$2