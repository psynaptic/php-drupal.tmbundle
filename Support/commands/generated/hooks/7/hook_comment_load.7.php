/**
 * Implements hook_comment_load().
 */
function <?php print $basename; ?>_comment_load(\$comments) {
  ${1:\$result = db_query('SELECT cid, foo FROM {mytable\} WHERE cid IN (:cids)', array(':cids' => array_keys(\$comments)));
  foreach (\$result as \$record) {
    \$comments[\$record->cid]->foo = \$record->foo;
  \}}
}

$2